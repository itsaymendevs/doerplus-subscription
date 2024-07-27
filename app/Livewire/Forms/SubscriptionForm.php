<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SubscriptionForm extends Form
{


    // :: FLAGS
    public $isExistingCustomer = false;





    // --------------------------------------------------






    // :: STEP 1
    public $phone, $email, $name, $firstName, $lastName, $whatsapp, $gender, $planId, $password;

    public $id;




    // --------------------------------------------------





    // :: STEP 2
    public $planBundleId, $planBundleRangeId, $planDays, $startDate, $initStartDate;


    public $planBundleTypes = [];


    // :: helpers
    public $planBundleRangePricePerDay, $totalPlanBundleRangeCalories, $totalPlanBundleRangePrice;

    public $planBundleTypesInArray;







    // --------------------------------------------------






    // :: STEP 3
    public $bag, $bagPrice;


    public $allergyLists = [], $excludeLists = [];



    // :: helpers
    public $bagImageFile;




    // --------------------------------------------------






    // :: STEP 4
    public $cityId, $cityDistrictId, $cityDeliveryTimeId, $locationAddress, $apartment, $floor;


    public $deliveryDays = [];










    // --------------------------------------------------






    // :: STEP 5
    public $promoCode, $promoCodeDiscountPrice;

    public $totalPrice;
    public $totalCheckoutPrice;

    public $paymentMethodId, $isPaymentDone = false;








    // ---------------------------
    // ---------------------------
    // ---------------------------




    // :: STEP 5 - Existing
    public $useWallet = false, $walletDiscountPrice;








} // end form
