<?php

namespace App\Livewire\Website\Plans\PlansCheckout\Components;

use App\Models\City;
use Livewire\Component;

class PlansCheckoutAddress extends Component
{



    public function render()
    {


        // 1: dependencies
        $cities = City::all();




        return view('livewire.website.plans.plans-checkout.components.plans-checkout-address', compact('cities'));



    } // end function


} // end class
