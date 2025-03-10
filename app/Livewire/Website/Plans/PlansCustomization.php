<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Allergy;
use App\Models\Bag;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Exclude;
use App\Models\MealType;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleDay;
use App\Models\PlanBundleRange;
use App\Models\PlanBundleRangePrice;
use App\Models\SubscriptionFormSetting;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;


#[Layout('livewire.layouts.website.plans-customization')]
class PlansCustomization extends Component
{



    use HelperTrait;




    // :: variables
    public SubscriptionForm $instance;
    public $plan, $planBundles, $planBundleRanges, $planBundleDays;
    public $pickedPlanBundle, $pickedPlanBundleRange;

    public $requiredTypes = [];



    // :: dependencies
    public $allergyLists, $excludeLists, $sampleMeals, $minimumDeliveryDays, $hasOptionalBag;











    public function mount($name)
    {


        // 1: checkCartOrCustomization
        $setting = CustomerSubscriptionSetting::first();


        if (! $setting->hasPlanCustomization) {

            return $this->redirect(route('website.plans.cart', [$name]), navigate: false);

        } // end if









        // :: checkSession
        if (session('pre-customer') && session('pre-customer')->{'isExistingCustomer'}) {

            Session::forget('customer');
            $this->instance = session('pre-customer');

        } else {

            Session::forget('customer');
            Session::forget('pre-customer');

        } // end if







        // ------------------------------------
        // ------------------------------------








        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();
        $this->instance->planId = $this->plan->id;






        // 1.2: dependencies
        $this->planBundles = PlanBundle::where('planId', $this->plan->id)->where('isForWebsite', true)->get();
        $this->allergyLists = Allergy::all();
        $this->excludeLists = Exclude::all();







        // 1.3: initStart
        if (! $this->instance->isExistingCustomer) {

            if (env('APP_PAYMENT') && env('APP_PAYMENT') == 'local') {

                $this->instance->initStartDate = date('Y-m-d', strtotime("-60 days"));

            } else {


                $restrictionDays = CustomerSubscriptionSetting::first()?->changeCalendarRestriction ?? 1;
                $this->instance->initStartDate = date('Y-m-d', strtotime("+{$restrictionDays} days"));

            } // end if

        } // end if








        // 1.4: optionalBag
        $this->hasOptionalBag = $setting->hasOptionalBag;






        // ------------------------------------
        // ------------------------------------








        // 2: sampleMeals




        // 2.1: mealTypes
        $types = Type::whereIn('name', ['Recipe'])->get()?->pluck('id')?->toArray();
        $mealTypes = MealType::whereIn('typeId', $types)->get()?->pluck('id')?->toArray();





        // 2.2: sampleMeals
        $sampleMeals = MenuCalendarScheduleMeal::with('meal')
            ->whereNotNull('mealId')
            ->whereIn('mealTypeId', $mealTypes)
            ->where('scheduleDate', $this->getCurrentDate())
            ->take(12)->get();






        // 2.3: defaultBag
        $this->instance->bag = true;





    } // end function















    // --------------------------------------------------------------------









    public function changePlanBundle()
    {



        // 1.2: getBundle
        $this->pickedPlanBundle = PlanBundle::find($this->instance->planBundleId);



        foreach ($this->pickedPlanBundle->types->groupBy('typeId') as $commonType => $bundleTypes)
            $this->requiredTypes[$commonType] = $bundleTypes->sum('quantity');








        // --------------------------------------
        // --------------------------------------






        // 2: reset
        $this->instance->planDays = null;
        $this->instance->startDate = null;
        $this->instance->planRangeId = null;
        $this->instance->planBundleRangeId = null;
        $this->instance->totalPlanBundleRangePrice = 0;





        // 2.1: getRanges
        $this->planBundleRanges = $this->pickedPlanBundle?->ranges;






        // 2.2: getBundleTypes
        foreach ($this->pickedPlanBundle->types as $bundleType) {

            $this->instance->planBundleTypes[$bundleType->mealType->id] = $bundleType->quantity;

        } // end loop








    } // end function















    // --------------------------------------------------------------------









    public function changePlanBundleRange($id)
    {



        // 1: getBundleRange
        $this->instance->planBundleRangeId = $id;
        $this->pickedPlanBundleRange = PlanBundleRange::find($id);


        // 1.1: planRange
        $this->instance->planRangeId = $this->pickedPlanBundleRange->planRangeId;







        // 1.2: getPricePerDay - totalRangePrice
        $this->instance->planBundleRangePricePerDay = $this->pickedPlanBundle->rangesByPrice->where('planRangeId', $this->pickedPlanBundleRange->range->id)?->first()?->pricePerDay;



        $this->instance->totalPlanBundleRangePrice = intval($this->instance->planDays ?? 0) * $this->instance->planBundleRangePricePerDay;







        // 2: initSelect - datePicker
        $this->dispatch('initSelect');
        $this->dispatch('initDatePicker');





        // 2.1: reset
        $this->instance->planDays = null;


        $this->recalculate();



    } // end function








    // -------------------------------------------------------------







    public function recalculate()
    {





        // 1: recalculatePrice
        $this->instance->totalPlanBundleRangePrice = intval($this->instance->planDays ?? 0) * $this->instance->planBundleRangePricePerDay;





        // 1.2: discountPrice
        $bundleDiscount = PlanBundleDay::where('planBundleId', $this->instance->planBundleId)
            ->where('days', $this->instance?->planDays ?? 0)?->first()?->discount ?? 0;

        $bundleAdjustmentDiscount = PlanBundleDay::where('planBundleId', $this->instance->planBundleId)
            ->where('days', $this->instance?->planDays ?? 0)?->first()?->adjustor ?? 0;




        $this->instance->planBundleRangeDiscountPrice = $this->instance->totalPlanBundleRangePrice * ($bundleDiscount / 100);
        $this->instance->planBundleRangeAdjustmentPrice = $this->instance->totalPlanBundleRangePrice * ($bundleAdjustmentDiscount / 100);





        // 1.3: planPrice - totalPrice
        $this->instance->planPrice = $this->instance->totalPlanBundleRangePrice - ($this->instance->planBundleRangeDiscountPrice + $this->instance->planBundleRangeAdjustmentPrice);











    } // end function








    // --------------------------------------------------------------










    #[On('confirmStep')]
    public function continue($personalDetails = null, $isManualExistingCustomer = false)
    {




        // 1: handleParams
        if ($personalDetails && $isManualExistingCustomer == false) {


            $personalDetails = json_decode(json_encode($personalDetails));

            $this->instance->isManualExistingCustomer = false;

            $this->instance->firstName = $personalDetails->firstName;
            $this->instance->lastName = $personalDetails->lastName;

            $this->instance->gender = $personalDetails->gender;
            $this->instance->email = $personalDetails->email;
            $this->instance->emailProvider = $personalDetails->emailProvider;

            $this->instance->phone = $personalDetails->phone;
            $this->instance->phoneKey = $personalDetails->phoneKey;

            $this->instance->whatsapp = $personalDetails->whatsapp;
            $this->instance->whatsappKey = $personalDetails->whatsappKey;


        } // end if









        // 1.2: handleParams
        if ($personalDetails && $isManualExistingCustomer == true) {



            $personalDetails = json_decode(json_encode($personalDetails));

            $this->instance->isManualExistingCustomer = true;

            $this->instance->firstName = $personalDetails->firstName;
            $this->instance->lastName = $personalDetails->lastName;

            $this->instance->gender = $personalDetails->gender;
            $this->instance->email = $personalDetails->email;
            $this->instance->emailProvider = $personalDetails->emailProvider;
            $this->instance->fullEmail = $personalDetails->fullEmail;

            $this->instance->phone = $personalDetails->phone;
            $this->instance->phoneKey = $personalDetails->phoneKey;

            $this->instance->whatsapp = $personalDetails->whatsapp;
            $this->instance->whatsappKey = $personalDetails->whatsappKey;





            // 1.2.4: location
            $this->instance->cityId = $personalDetails->cityId;
            $this->instance->cityDistrictId = $personalDetails->cityDistrictId;
            $this->instance->cityDeliveryTimeId = $personalDetails->cityDeliveryTimeId;

            $this->instance->locationAddress = $personalDetails->locationAddress;
            $this->instance->apartment = $personalDetails->apartment;
            $this->instance->floor = $personalDetails->floor;






            // 1.2.5: deliveryDays - initStartDate
            $this->instance->deliveryDays = $personalDetails->deliveryDays;
            $this->instance->initStartDate = $personalDetails->initStartDate;



            $this->instance->startDate = (date('Y-m-d', strtotime($this->instance->startDate)) < $this->instance->initStartDate) ? date('d/m/Y', strtotime($this->instance->initStartDate)) : $this->instance->startDate;




        } // end if





        // -----------------------------------------------------
        // -----------------------------------------------------








        // 2: validation



        // 2.1: startDate
        if (empty($this->instance->startDate)) {

            $this->makeAlert('info', "Please select starting date");

            return false;

        } // end if










        // -----------------------------------------------------
        // -----------------------------------------------------





        // 3: fillData




        // 3.1: bag
        if ($this->instance->bag) {


            $bag = Bag::first();
            $this->instance->bagPrice = $bag->price;

        } else {

            $this->instance->bagPrice = 0;

        } // end if






        // 3.1.5: localBag is zero [BeMoreHealthy]
        if (env('APP_PAYMENT') && env('APP_PAYMENT') == 'local' && env('APP_CLIENT') == 'BeMoreHealthy') {

            $this->instance->bagPrice = 0;

        } // end if







        // ----------------------------------------------------
        // ----------------------------------------------------
        // ----------------------------------------------------






        // 3.2: totalPrice
        $this->instance->totalPrice = $this->instance->planPrice + $this->instance->bagPrice;
        $this->instance->totalCheckoutPrice = $this->instance->planPrice + $this->instance->bagPrice;











        // ----------------------------------------------------
        // ----------------------------------------------------





        // :: continue


        // 4: makeSession
        Session::put('pre-customer', $this->instance);




        // 2.1: nextStep
        return $this->redirect(route('website.plans.checkout', [$this->plan->nameURL]));



    } // end function













    // --------------------------------------------------------------------












    public function render()
    {




        // 1: dependencies
        $bag = Bag::first();
        $settings = SubscriptionFormSetting::first();
        $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];




        // 1.2: plans
        // $plans = Plan::where('id', '!=', $this->plan->id)->get();

        $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->where('id', '!=', $this->plan->id)
            ->get();







        return view('livewire.website.plans.plans-customization', compact('plans', 'bag', 'settings'));




    } // end function






} // end class
