<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\SubscriptionForm;
use App\Models\Bag;
use App\Models\Plan;
use App\Traits\HelperTrait;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.plans-customization')]
class PlansCheckout extends Component
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







    public function render()
    {


        // 1: dependencies
        $bag = Bag::first();
        $providers = ['gmail.com', 'outlook.com', 'hotmail.com', 'yahoo.com'];
        $countryCodes = ['+971', '+974'];




        return view('livewire.website.plans.plans-checkout', compact('providers', 'countryCodes', 'bag'));


    } // end function









} // end class
