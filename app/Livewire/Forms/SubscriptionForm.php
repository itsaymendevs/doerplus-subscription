<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SubscriptionForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $planId, $planBundleId, $planBundleRangeId, $planDays, $startDate;



    public $coolBag = true;



    // 1: prices
    public $planPrice;




} // end form
