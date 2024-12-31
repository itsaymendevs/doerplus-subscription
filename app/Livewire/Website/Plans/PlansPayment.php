<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Lead;
use App\Models\PaymentMethod;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleRange;
use App\Models\SubscriptionFormSetting;
use App\Traits\HelperTrait;
use App\Traits\StripeTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Stripe\StripeClient;

#[Layout('livewire.layouts.website.plans-customization')]
class PlansPayment extends Component
{

    use HelperTrait;
    use StripeTrait;


    // :: variables
    public SubscriptionForm $instance;
    public $pickedPlanBundle, $pickedPlanBundleRange;
    public $plan, $clientSecret, $paymentMethod;









    public function mount($name)
    {



        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();




        // 1.2: handleSession
        if (session('customer')) {

            $this->instance = Session::get('customer');


        } else {

            Session::forget('customer');
            Session::forget('pre-customer');
            return $this->redirect(route('website.plans.customization', [$this->plan->nameURL]));

        } // end if









        // ----------------------------------------------------------------
        // ----------------------------------------------------------------






        // 2: dependencies
        $this->pickedPlanBundle = PlanBundle::find($this->instance->planBundleId);
        $this->pickedPlanBundleRange = PlanBundleRange::find($this->instance->planBundleRangeId);


        // 2.5: paymentMethod
        $this->paymentMethod = PaymentMethod::where('name', 'Stripe')?->first();







        // 3: payment
        $stripeSecret = $this->paymentMethod->envSecondKey;
        $stripe = new StripeClient($stripeSecret);



        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => doubleval($this->instance->totalCheckoutPrice) * 100,
            'currency' => 'aed',
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);






        // 3.2: clientSecret
        $this->clientSecret = $paymentIntent->client_secret;
        $this->instance->stripeSecret = $paymentIntent->client_secret;




        // 3.3: storeSecret
        $lead = Lead::where('email', $this->instance->email)
            ->where('emailProvider', $this->instance->emailProvider)->latest('id')->first();

        $lead->paymentReference = $paymentIntent->client_secret;
        $lead->save();

        Session::put('customer', $this->instance);







    } // end function










    // ----------------------------------------------------------------------------------------






    public function render()
    {


        // 1: dependencies
        $settings = SubscriptionFormSetting::first();


        return view('livewire.website.plans.plans-payment', compact('settings'));

    } // end function




} // end class
