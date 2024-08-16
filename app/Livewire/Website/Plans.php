<?php

namespace App\Livewire\Website;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Customer;
use App\Models\Plan;
use App\Models\SubscriptionSetting;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.website.plans')]
class Plans extends Component
{



    // variables
    public SubscriptionForm $instance;
    public $renewEmail;





    public function mount($token = null)
    {



        // 1: checkReToken
        if ($token) {

            $this->renewEmail = Customer::where('reToken', $token)?->first()?->email ?? null;


            if (empty($this->renewEmail)) {

                return redirect()->route('website.plans');

            } // end if



        } // end if








        // ---------------------------------------------
        // ---------------------------------------------










        // 2: forgetCustomer
        Session::forget('customer');
        Session::forget('pre-customer');




    } // end function












    // --------------------------------------------------------------------











    public function prepExistingCustomer($nameURL)
    {



        // 1: getDependencies
        $plan = Plan::where('nameURL', $nameURL)->first();
        $this->instance->planId = $plan->id;

        $customer = Customer::where('email', $this->renewEmail)->first();





        // 1.2: continue
        if ($customer) {




            // 1.3: flag - getBasicInformation
            $this->instance->isExistingCustomer = true;


            $this->instance->firstName = $customer->firstName;
            $this->instance->lastName = $customer->lastName;

            $this->instance->email = $customer->email;
            $this->instance->emailProvider = $customer->emailProvider;

            $this->instance->phone = $customer->phone;
            $this->instance->phoneKey = $customer->phoneKey;

            $this->instance->whatsapp = $customer->whatsapp;
            $this->instance->whatsappKey = $customer->whatsappKey;






            // 1.3.2: location
            $latestAddress = $customer?->latestAddress();
            $this->instance->cityId = $latestAddress?->cityId;
            $this->instance->cityDistrictId = $latestAddress?->cityDistrictId;
            $this->instance->cityDeliveryTimeId = $latestAddress?->deliveryTimeId;

            $this->instance->floor = $latestAddress?->floor;
            $this->instance->apartment = $latestAddress?->apartment;
            $this->instance->locationAddress = $latestAddress?->locationAddress;








            // 1.4: get initStartDate
            $this->instance->initStartDate = $customer?->latestSubscription()?->untilDate ?
                date('Y-m-d', strtotime($customer?->latestSubscription()?->untilDate . ' +48 hours')) : null;






            // 1.5: resetVars
            $this->instance->deliveryDays = $customer?->deliveryWeekDays() ?? [];






            // 1.6: makeSession
            Session::put('pre-customer', $this->instance);

            return $this->redirect(route('website.plans.customization', [$plan->nameURL]), navigate: false);




        } else {


            $this->makeAlert('info', 'Invalid Email');
            return $this->redirect(route('website.plans'), navigate: false);


        } // end if








    } // end function












    // --------------------------------------------------------------------












    public function render()
    {

        // 1: dependencies
        $path = 'livewire.website.plans-first';
        $settings = SubscriptionSetting::first();



        // 1.2: plans
        $plans = Plan::all();

        // $plans = Plan::whereHas('ranges')
        //     ->whereHas('bundles')
        //     ->whereHas('defaultCalendarRelation')
        //     ->where('isForWebsite', true)
        //     ->get();






        // 2.1: Grid
        if ($settings->template == 'Gird Slider') {

            $path = 'livewire.website.plans-first';


        } elseif ($settings->template == 'Grid Fully Slider') {

            $path = 'livewire.website.plans-second';

        } elseif ($settings->template == 'Motion Slider') {


            $path = 'livewire.website.plans-third';


        } elseif ($settings->template == 'Half Slider') {


            $path = 'livewire.website.plans-fourth';


        } elseif ($settings->template == 'Parallax Slider') {


            $path = 'livewire.website.plans-fifth';


        } elseif ($settings->template == 'Two Columns Slider') {


            $path = 'livewire.website.plans-sixth';


        } elseif ($settings->template == 'Three Columns Slider') {


            $path = 'livewire.website.plans-seventh';

        } // end if









        return view($path, compact('plans', 'settings'));


    } // end function





} // end class

