<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Allergy;
use App\Models\Bag;
use App\Models\CityHoliday;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Exclude;
use App\Models\MealType;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleRange;
use App\Models\PlanBundleRangePrice;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;


#[Layout('livewire.layouts.plans-customization')]
class PlansCustomization extends Component
{










    // ----------------------------------------------------------------






    // public function pickBundleRange($id)
    // {


    //     // 1: getBundleRange
    //     $this->instance->planBundleRangeId = $id;



    //     // 1.2: getVars
    //     $this->pickedBundleRange = PlanBundleRange::find($this->instance?->planBundleRangeId);




    //     // 1.3: initDatePicker
    //     $this->dispatch('initDatePicker');
    //     $this->dispatch('initSelect');






    //     // ----------------------------------------
    //     // ----------------------------------------





    //     // 2: reset
    //     $this->instance->planDays = null;
    //     $this->instance->planPrice = null;





    // } // end function







    // ----------------------------------------------------------------







    // public function pickPlanDays($days)
    // {



    //     // 1: getBundle
    //     $this->instance->planDays = $days;



    //     // 1.2: pricePerDay
    //     $pricePerDay = PlanBundleRangePrice::where('planRangeId', $this->pickedBundleRange?->range?->id)
    //         ->where('planBundleId', $this->pickedBundle->id)?->first()?->pricePerDay ?? 0;







    //     // ---------------------------------------
    //     // ---------------------------------------






    //     // 2: getPlanPrice
    //     $this->instance->planPrice = $days * $pricePerDay;






    // } // end function











    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------









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


        // :: checkSession
        if (session('customer') && session('customer')->{'isExistingCustomer'}) {

            $this->instance = session('customer');

        } else {

            Session::forget('customer');

        } // end if








        // ------------------------------------
        // ------------------------------------








        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();
        $this->instance->planId = $this->plan->id;






        // 1.2: dependencies
        $this->planBundles = PlanBundle::where('planId', $this->plan->id)->get();
        $this->allergyLists = Allergy::all();
        $this->excludeLists = Exclude::all();
        $this->minimumDeliveryDays = CustomerSubscriptionSetting::first()->minimumDeliveryDays;









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






        // 2: reset - getRanges - refreshSelect
        $this->instance->planDays = null;
        $this->instance->planBundleRangeId = null;
        $this->instance->planBundleRangeName = null;
        $this->instance->totalPlanBundleRangePrice = 0;






        // 2.1: getRanges - refreshDays
        $this->planBundleRanges = $this->pickedPlanBundle?->ranges;
        $this->refreshSelect('#plan--days-select', 'bundle', 'days', $this->pickedPlanBundle->id, true);






    } // end function















    // --------------------------------------------------------------------









    public function changePlanBundleRange($id)
    {



        // 1: getBundleRange
        $this->instance->planBundleRangeId = $id;
        $this->pickedPlanBundleRange = PlanBundleRange::find($id);






        // 1.2: getPricePerDay
        $this->instance->planBundleRangePricePerDay = $this->planBundle->rangesByPrice->where('planRangeId', $id)?->first()?->pricePerDay;





        // 1.3: get totalPrice - totalCalories
        $this->instance->totalBundleRangeCalories = $this->plan->ranges?->where('id', $this->instance->bundleRangeId)?->first()?->caloriesRange;








        // -------------------------
        // -------------------------








        // 1.3: getDiscountRaw
        $discount = PlanBundleDay::where('planBundleId', $this->instance->planBundleId)
            ->where('days', $this->instance?->planDays ?? 0)?->first()?->discount ?? 0;






        // 1.4: calculateDiscount
        $discountPrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) * ($discount / 100);





        // 1.5: totalPrice (-Discount)
        $this->instance->totalBundleRangePrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) - $discountPrice;









        // ---------------------------
        // ---------------------------








        // 2: getBundleTypes
        foreach ($planBundle->types as $bundleType) {

            $this->instance->bundleTypes[$bundleType->mealType->id] = $bundleType->quantity;

        } // end loop








        // 3: updateBundleRangeName
        $this->instance->bundleRangeName = $this->plan?->ranges
                ?->where('id', $this->instance->bundleRangeId)?->first()?->name ?? '';






    } // end function













    // --------------------------------------------------------------










    public function continue()
    {





        // 1: checkDeliveryDays



        // 1.2: check - deliveryDays
        if ($this->instance->isExistingCustomer == false && count($this->instance->deliveryDays ?? []) < $this->minimumDeliveryDays) {

            $this->makeAlert('info', "Please select at least {$this->minimumDeliveryDays} delivery days");

            return false;

        } // end if










        // 2: startDate



        // 2.2: check - startDate
        if (empty($this->instance->startDate)) {

            $this->makeAlert('info', "Please select starting date");

            return false;

        } // end if













        // 3: updateDiscount




        // 3.2: getDiscountRaw
        $discount = PlanBundleDay::where('planBundleId', $this->instance->planBundleId)
            ->where('days', $this->instance?->planDays ?? 0)?->first()?->discount ?? 0;






        // 3.3: calculateDiscount
        $discountPrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) * ($discount / 100);





        // 3.4: totalPrice (-Discount)
        $this->instance->totalBundleRangePrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) - $discountPrice;










        // ------------------------------------
        // ------------------------------------








        // :: continue


        // 4: makeSession
        Session::put('customer', $this->instance);







        // 3.1: toggleCustomerInformation
        $this->dispatch('openModal', modal: '#personal-information');
        $this->dispatch('personalInformationStep');







    } // end function

















    // --------------------------------------------------------------------











    public function continueExisting()
    {




        // 1: appendMissingInformation





        // 1.2: bag
        $bag = Bag::whereIn('name', ['Cool Bag', 'Cooler Bag'])->first();


        $this->instance->bag = $bag->name;
        $this->instance->bagImageFile = $bag->imageFile;
        $this->instance->bagPrice = $bag->price;









        // 1.3: calculateTotalPrice
        $this->instance->totalPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;
        $this->instance->totalCheckoutPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;








        // ----------------------------------
        // ----------------------------------







        // :: continue




        // 2: makeSession
        Session::put('customer', $this->instance);







        // :: redirectStepTwo
        return $this->redirect(route('website.plans.stepTwo', [$this->instance->planId]), navigate: false);





    } // end function











    // --------------------------------------------------------------------












    public function render()
    {




        // 1: dependencies
        $bag = Bag::first();
        $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->where('id', '!=', $this->plan->id)
            ->get();










        // ------------------------------------------
        // ------------------------------------------







        // 2: getHolidays [Dubai]
        $holidayWeekDays = CityHoliday::where('cityId', 1)->where('isActive', 1)
                ?->get()?->pluck('weekday')?->toArray() ?? [];






        // 2.1: loop - removeHolidays
        foreach ($holidayWeekDays as $holidayWeekDay) {

            if (($key = array_search($holidayWeekDay, $weekDays)) !== false)
                unset($weekDays[$key]);

        } // end loop







        return view('livewire.website.plans.plans-customization', compact('weekDays', 'plans', 'bag'));




    } // end function






} // end class
