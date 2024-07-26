<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Allergy;
use App\Models\Bag;
use App\Models\Exclude;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleRange;
use App\Models\PlanBundleRangePrice;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;


#[Layout('livewire.layouts.plans-customization')]
class PlansCustomization extends Component
{


    use HelperTrait;


    // :: variables
    public $plan;
    public SubscriptionForm $instance;
    public $pickedBundle, $pickedBundleRange;






    public function mount($name)
    {


        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();



    } // end function







    // ----------------------------------------------------------------






    public function pickBundle($id)
    {


        // 1: getBundle
        $this->instance->planBundleId = $id;




        // 1.2: updateVars
        $this->pickedBundle = PlanBundle::find($this->instance?->planBundleId);





        // ----------------------------------------
        // ----------------------------------------





        // 2: reset
        $this->instance->planBundleRangeId = null;
        $this->instance->planDays = null;
        $this->instance->planPrice = null;


        // 2.1: resetVars
        $this->pickedBundleRange = null;



    } // end function







    // ----------------------------------------------------------------






    public function pickBundleRange($id)
    {


        // 1: getBundleRange
        $this->instance->planBundleRangeId = $id;



        // 1.2: getVars
        $this->pickedBundleRange = PlanBundleRange::find($this->instance?->planBundleRangeId);




        // 1.3: initDatePicker
        $this->dispatch('initDatePicker');
        $this->dispatch('initSelect');






        // ----------------------------------------
        // ----------------------------------------





        // 2: reset
        $this->instance->planDays = null;
        $this->instance->planPrice = null;





    } // end function







    // ----------------------------------------------------------------







    public function pickPlanDays($days)
    {



        // 1: getBundle
        $this->instance->planDays = $days;



        // 1.2: pricePerDay
        $pricePerDay = PlanBundleRangePrice::where('planRangeId', $this->pickedBundleRange?->range?->id)
            ->where('planBundleId', $this->pickedBundle->id)?->first()?->pricePerDay ?? 0;







        // ---------------------------------------
        // ---------------------------------------






        // 2: getPlanPrice
        $this->instance->planPrice = $days * $pricePerDay;






    } // end function










    // ----------------------------------------------------------------





    public function render()
    {


        // 1: dependencies
        $bag = Bag::first();
        $excludes = Exclude::all();
        $allergies = Allergy::all();




        // 1.2: otherPlans
        $plans = Plan::where('id', '!=', $this->plan->id)->get();







        return view('livewire.website.plans.plans-customization', compact('plans', 'bag', 'allergies', 'excludes'));


    } // end function










} // end class
