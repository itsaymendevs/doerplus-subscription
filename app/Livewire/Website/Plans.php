<?php

namespace App\Livewire\Website;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Customer;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Plan;
use App\Models\SubscriptionSetting;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.website.plans')]
class Plans extends Component
{


    use HelperTrait;


    // variables
    public SubscriptionForm $instance;
    public $renewEmail, $renewEmailProvider;





    public function mount($reToken = null)
    {




        // 1: checkReToken
        if ($reToken) {

            $this->renewEmail = Customer::where('reToken', $reToken)?->first()?->email ?? null;
            $this->renewEmailProvider = Customer::where('reToken', $reToken)?->first()?->emailProvider ?? null;


            if (empty($this->renewEmail)) {

                return redirect()->route('website.plans');

            } // end if



        } // end if








        // --------------------------------
        // --------------------------------







        // 2: forgetSession
        Session::forget('customer');
        Session::forget('pre-customer');





    } // end function












    // --------------------------------------------------------------









    public function prepExistingCustomer($id)
    {


        // :: prepExistingCustomer
        $plan = Plan::find($id);
        $this->instance->planId = $plan->id;




        // 1: checkCustomer
        $customer = Customer::where('email', $this->renewEmail)?->where('emailProvider', $this->renewEmailProvider)->first();






        // 1.2: continue
        if ($customer) {





            // 1.3: flag - getBasicInformation
            $this->instance->isExistingCustomer = true;

            $this->instance->firstName = $customer->firstName;
            $this->instance->lastName = $customer->lastName;
            $this->instance->gender = $customer->gender;

            $this->instance->email = $customer->email;
            $this->instance->emailProvider = $customer->emailProvider;

            $this->instance->phone = $customer->phone;
            $this->instance->phoneKey = $customer->phoneKey;

            $this->instance->whatsapp = $customer->whatsapp;
            $this->instance->whatsappKey = $customer->whatsappKey;




            // 1.3.2: location
            $latestAddress = $customer?->latestAddress();
            $this->instance->cityId = $latestAddress->cityId;
            $this->instance->cityDistrictId = $latestAddress->cityDistrictId;
            $this->instance->cityDeliveryTimeId = $latestAddress->deliveryTimeId;

            $this->instance->locationAddress = $latestAddress->locationAddress;
            $this->instance->apartment = $latestAddress->apartment;
            $this->instance->floor = $latestAddress->floor;






            // 1.4: get initStartDate
            $restrictionDays = CustomerSubscriptionSetting::first()?->changeCalendarRestriction ?? 0;


            if ($customer?->latestSubscription()?->untilDate && $customer?->latestSubscription()?->untilDate > $this->getCurrentDate()) {


                $this->instance->initStartDate = date('Y-m-d', strtotime($customer?->latestSubscription()?->untilDate . "+1 day"));


            } else {


                $this->instance->initStartDate = date('Y-m-d', strtotime("+4 hours"));


            } // end if













            // 1.5: resetVars
            $this->instance->deliveryDays = $latestAddress->deliveryDaysInArray();



            // 1.6: makeSession - redirectStepTwo
            Session::put('pre-customer', $this->instance);


            return $this->redirect(route('website.plans.customization', [$plan->nameURL]), navigate: false);




            // 2: incorrect
        } else {



            $this->makeAlert('info', 'Invalid Email');

            return $this->redirect(route('website.plans'));


        } // end if







    } // end function











    // --------------------------------------------------------------------












    public function render()
    {

        // 1: dependencies
        $path = 'livewire.website.plans-first';
        $settings = SubscriptionSetting::first();



        // 1.2: plans
        $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->get();






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

