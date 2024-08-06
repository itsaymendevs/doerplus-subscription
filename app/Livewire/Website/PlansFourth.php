<?php

namespace App\Livewire\Website;

use App\Models\Plan;
use App\Models\SubscriptionSetting;
use Livewire\Component;

class PlansFourth extends Component
{


    public function render()
    {

        // 1: dependencies
        $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->get();

        $settings = SubscriptionSetting::first();


        return view('livewire.website.plans-fourth', compact('plans', 'settings'));


    } // end function


} // end class
