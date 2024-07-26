<?php

namespace App\Livewire\Website\Plans\PlansCustomization\Components;

use App\Models\Plan;
use Livewire\Attributes\On;
use Livewire\Component;

class PlansCustomizationInformation extends Component
{


    // :: variables
    public $plan;




    public function mount($name)
    {


        // 1: get instance
        $this->plan = Plan::where('nameURL', $name)->first();



    } // end function









    // ----------------------------------------------------------------









    public function render()
    {

        // 1: dependencies
        $providers = ['@gmail.com', '@outlook.com', '@hotmail.com', '@yahoo.com'];
        $countryCodes = ['+971', '+974'];






        return view('livewire.website.plans.plans-customization.components.plans-customization-information', compact('providers', 'countryCodes'));



    } // end function







} // end class
