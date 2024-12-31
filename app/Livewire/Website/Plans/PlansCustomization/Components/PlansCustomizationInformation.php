<?php

namespace App\Livewire\Website\Plans\PlansCustomization\Components;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\CountryCode;
use App\Models\Customer;
use App\Models\Plan;
use App\Models\SubscriptionFormSetting;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class PlansCustomizationInformation extends Component
{

    use HelperTrait;


    // :: variables
    public SubscriptionForm $instance;
    public $plan;







    public function mount()
    {


        // 1: init


        // 1.2: checkSession
        if (session('pre-customer')) {


            foreach (session('pre-customer')?->toArray() as $key => $value)
                $this->instance->{$key} = $value;


        } else {


            $this->instance->phoneKey = '+971';
            $this->instance->whatsappKey = '+971';
            $this->instance->emailProvider = '@gmail.com';


        } // end if






    } // end function













    // ----------------------------------------------------------------









    public function continueExisting()
    {


        // 1: checkCustomer
        if ($this->instance->existingFullEmail && $this->instance->existingPassword) {



            // 1.2: getEmail
            $fullEmail = explode('@', $this->instance->existingFullEmail);

            $email = $fullEmail[0];
            $emailProvider = "@{$fullEmail[1]}";






            // -----------------------------------------------
            // -----------------------------------------------






            // 1.3: checkAccount
            $customer = Customer::where('email', $email)?->where('emailProvider', $emailProvider)?->first();





            // 1.3.5: existingCustomer - orNot
            if ($customer && Hash::check($this->instance->existingPassword, $customer?->password)) {






                // 1.3: flag - getBasicInformation
                $this->instance->isManualExistingCustomer = true;

                $this->instance->firstName = $customer->firstName;
                $this->instance->lastName = $customer->lastName;
                $this->instance->gender = $customer->gender;

                $this->instance->email = $customer->email;
                $this->instance->emailProvider = $customer->emailProvider;
                $this->instance->fullEmail = $this->instance->existingFullEmail;

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






                // 1.4: getInitStartDate
                if ($customer?->latestSubscription()?->untilDate && $customer?->latestSubscription()?->untilDate > $this->getCurrentDate()) {


                    $this->instance->initStartDate = date('Y-m-d', strtotime($customer?->latestSubscription()?->untilDate." +1 day"));


                } else {


                    $this->instance->initStartDate = date('Y-m-d', strtotime("+4 hours"));


                } // end if








                // 1.5: resetVars
                $this->instance->deliveryDays = $latestAddress->deliveryDaysInArray();



                $this->dispatch('confirmStep', $this->instance, true);



            } else {

                $this->makeAlert('info', 'Invalid Credentials');

            } // end if







        } // end if





    } // end function










    // ----------------------------------------------------------------









    public function continue()
    {



        // 1: dispatchEvent
        if ($this->instance->gender) {



            // 1.2: getEmail
            $fullEmail = explode('@', $this->instance->fullEmail);

            $this->instance->email = $fullEmail[0];
            $this->instance->emailProvider = "@{$fullEmail[1]}";



            // 1.3: checkEmailUnique
            $isEmailDuplicated = Customer::where('email', operator: $this->instance->email)?->where('emailProvider', $this->instance->emailProvider)?->count() ?? 0;

            $isPhoneDuplicated = Customer::where('phone', operator: $this->instance->phone)?->count() ?? 0;


            if ($isEmailDuplicated) {

                $this->makeAlert('info', 'Email is already in use, please try another one');
                return false;

            } // end if



            if ($isPhoneDuplicated) {

                $this->makeAlert('info', 'Phone Number is already in use, please try another one');
                return false;

            } // end if






            $this->dispatch('confirmStep', $this->instance);

        } // end if





    } // end function









    // ----------------------------------------------------------------








    public function render()
    {

        // 1: dependencies
        $providers = ['@gmail.com', '@outlook.com', '@hotmail.com', '@yahoo.com', '@icloud.com'];
        $settings = SubscriptionFormSetting::first();
        $countryCodes = CountryCode::all();





        return view('livewire.website.plans.plans-customization.components.plans-customization-information', compact('providers', 'countryCodes', 'settings'));



    } // end function







} // end class
