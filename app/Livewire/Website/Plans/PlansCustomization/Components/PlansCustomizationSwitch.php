<?php

namespace App\Livewire\Website\Plans\PlansCustomization\Components;

use App\Models\CustomerSubscriptionSetting;
use App\Models\Plan;
use Livewire\Component;

class PlansCustomizationSwitch extends Component
{


    // :: variables
    public $type, $plan;




    public function mount($id, $type)
    {


        // 1: params
        $this->type = $type;
        $this->plan = Plan::find($id);


    } // end function










    // ----------------------------------------------------------------




    public function render()
    {


        // 1: dependencies
        $settings = CustomerSubscriptionSetting::first();



        return view('livewire.website.plans.plans-customization.components.plans-customization-switch', compact('settings'));

    } // end function





} // end class
