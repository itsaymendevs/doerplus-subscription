<?php

namespace App\Livewire\Website\Plans\PlansCustomization\Components;

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

        return view('livewire.website.plans.plans-customization.components.plans-customization-switch');

    } // end function





} // end class
