<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Allergy;
use App\Models\Bag;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Exclude;
use App\Models\Meal;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\SubscriptionFormSetting;
use App\Traits\HelperTrait;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.website.plans-customization')]
class PlansCart extends Component
{



   use HelperTrait;




   // :: variables
   public SubscriptionForm $instance;
   public $plan, $planBundles, $planBundleRanges, $planBundleDays;
   public $pickedPlanBundle, $pickedPlanBundleRange;

   public $requiredTypes = [];



   // :: dependencies
   public $allergyLists, $excludeLists, $sampleMeals, $minimumDeliveryDays;









   public function mount($name)
   {



      // 1: getPlan
      $this->plan = Plan::where('nameURL', $name)->first();
      $this->instance->planId = $this->plan->id;





      // 1.2: dependencies
      $this->allergyLists = Allergy::all();
      $this->excludeLists = Exclude::all();












   } // end function















   // --------------------------------------------------------------------













   public function render()
   {




      // 1: dependencies
      $bag = Bag::first();
      $settings = SubscriptionFormSetting::first();
      $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];




      // 1.2: plans
      $plans = Plan::where('id', '!=', $this->plan->id)->get();

      $meals = Meal::where('typeId', 1)->get()->take(5);




      return view('livewire.website.plans.plans-cart', compact('plans', 'bag', 'settings', 'meals'));




   } // end function






} // end class







