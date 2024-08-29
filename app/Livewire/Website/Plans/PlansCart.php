<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Allergy;
use App\Models\Bag;
use App\Models\Cuisine;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Diet;
use App\Models\Exclude;
use App\Models\Meal;
use App\Models\Menu;
use App\Models\Plan;
use App\Models\SubscriptionFormSetting;
use App\Models\Type;
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
    public $searchType, $searchCuisine, $searchDiet;









    public function mount($name)
    {



        // :: checkCartOrCustomization
        $setting = CustomerSubscriptionSetting::first();


        if (! $setting->hasPlanCart) {

            return $this->redirect(route('website.plans.customization', [$name]), navigate: false);

        } // end if







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
        $diets = Diet::all();
        $cuisines = Cuisine::all();
        $settings = SubscriptionFormSetting::first();
        $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $types = Type::whereNotIn('name', ["Sub-recipe", "Meal"])->get();




        // 1.2: plans
        $plans = Plan::where('id', '!=', $this->plan->id)->get();







        // ----------------------------------------------------------
        // ----------------------------------------------------------
        // ----------------------------------------------------------
        // ----------------------------------------------------------







        // 1.3: meals
        $mealsID = Menu::where('nameURL', 'cart')?->first()?->meals?->pluck('mealId')?->toArray() ?? [];
        $meals = Meal::whereIn('id', $mealsID)->get();



        $mealsRaw = $meals->filter(function ($item) {


            $toReturn = true;


            // 1: type
            $this->searchType ? $item?->typeId != $this->searchType ? $toReturn = false : null : null;

            // 2: cuisine
            $this->searchCuisine ? $item?->cuisineId != $this->searchCuisine ? $toReturn = false : null : null;

            // 3: diet
            $this->searchDiet ? $item?->dietId != $this->searchDiet ? $toReturn = false : null : null;


            return $toReturn;

        });



        $meals = Meal::whereIn('id', $mealsRaw?->pluck('id')?->toArray() ?? [])->get();



        return view('livewire.website.plans.plans-cart', compact('plans', 'bag', 'settings', 'meals', 'cuisines', 'diets', 'types'));






    } // end function





} // end class







