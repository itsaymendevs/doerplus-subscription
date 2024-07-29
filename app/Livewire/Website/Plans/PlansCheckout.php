<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Bag;
use App\Models\CityDistrict;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleRange;
use App\Models\PromoCode;
use App\Models\PromoCodePlan;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('livewire.layouts.plans-customization')]
class PlansCheckout extends Component
{


    use HelperTrait;


    // :: variables
    public $plan, $district;
    public SubscriptionForm $instance;
    public $pickedPlanBundle, $pickedPlanBundleRange;








    public function mount($name)
    {



        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();




        // 1.2: handleSession
        if (session('customer')) {

            $this->instance = Session::get('customer');

        } else {

            $this->redirect(route('website.plans.customization', [$this->plan->nameURL]));

        } // end if








        // ----------------------------------------------------------------
        // ----------------------------------------------------------------





        // 2: initials
        $this->instance->promoCodeDiscountPrice = 0;
        $this->instance->referralDiscountPrice = 0;



        // 2.5: dependencies
        $this->pickedPlanBundle = PlanBundle::find($this->instance->planBundleId);
        $this->pickedPlanBundleRange = PlanBundleRange::find($this->instance->planBundleRangeId);






    } // end function













    // ----------------------------------------------------------------








    #[On('confirmAddress')]
    public function storeAddress($addressDetails)
    {




        // 1: handleParams
        $addressDetails = json_decode(json_encode($addressDetails));

        $this->instance->cityId = $addressDetails->cityId;
        $this->instance->cityDistrictId = $addressDetails->cityDistrictId;
        $this->instance->cityDeliveryTimeId = $addressDetails->cityDeliveryTimeId;

        $this->instance->locationAddress = $addressDetails->locationAddress;
        $this->instance->apartment = $addressDetails->apartment;
        $this->instance->floor = $addressDetails->floor;
        $this->instance->deliveryDays = (array) $addressDetails->deliveryDays ?? [];






        // -----------------------------------------------------
        // -----------------------------------------------------







        // 2: getDistrict
        $this->district = CityDistrict::find($this->instance?->cityDistrictId);







    } // end function








    // ----------------------------------------------------------------




    public function checkPromo()
    {




        // 1: getPromo
        $planPromos = PromoCodePlan::where('planId', $this->plan->id)->get()?->pluck('promoCodeId')->toArray() ?? [];


        $promo = PromoCode::where('isActive', true)
            ->whereIn('id', $planPromos)
            ->where('code', $this->instance?->promoCode)
            ->whereColumn('currentUsage', '<', 'limit')->first();






        // 1.2: getDiscount
        if ($promo) {


            if ($promo->percentage) {

                $this->instance->promoCodeDiscountPrice = $this->instance->planPrice * ($promo->percentage / 100);

            } else {

                $this->instance->promoCodeDiscountPrice = $promo->cashAmount;

            } // end if


        } else {


            $this->instance->promoCodeDiscountPrice = 0;

        } // end if








        // 1.3: recalculate
        $this->recalculate();






    } // end function











    // ----------------------------------------------------------------









    public function recalculate()
    {



        // 1 getPlanPrice
        $this->instance->planPrice = $this->instance->totalPlanBundleRangePrice - $this->instance->planBundleRangeDiscountPrice;




        // 1.2: checkPromo
        $this->instance->planPrice -= $this->instance->referralDiscountPrice;
        $this->instance->planPrice -= $this->instance->promoCodeDiscountPrice;




        // 1.3: getTotal
        $this->instance->totalPrice = $this->instance->planPrice + $this->instance->bagPrice;
        $this->instance->totalCheckoutPrice = $this->instance->planPrice + $this->instance->bagPrice;







    } // end function







    // ----------------------------------------------------------------








    public function continue()
    {



        dd($this->instance);



    } // end function









    // ----------------------------------------------------------------








    public function render()
    {


        return view('livewire.website.plans.plans-checkout');


    } // end function









} // end class
