<?php

namespace App\Livewire\Website\Plans;

use App\Models\Plan;
use App\Traits\HelperTrait;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.plans-customization')]
class PlansCustomization extends Component
{


    use HelperTrait;


    // :: variables
    public $plan;




    public function mount($name)
    {


        // 1: getPlan
        $this->plan = Plan::where('nameURL', $name)->first();



    } // end function









    // ----------------------------------------------------------------





    public function render()
    {


        // 1: dependencies
        $plans = Plan::where('id', '!=', $this->plan->id)->get();


        return view('livewire.website.plans.plans-customization', compact('plans'));


    } // end function





} // end class
