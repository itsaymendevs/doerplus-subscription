<?php

namespace App\Models;

use App\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    use HelperTrait;




    public function ranges()
    {

        return $this->hasMany(PlanRange::class, 'planId');

    } // end function




    public function bundles()
    {

        return $this->hasMany(PlanBundle::class, 'planId');

    } // end function






    public function calendars()
    {

        return $this->hasMany(MenuCalendarPlan::class, 'planId');

    } // end function





    public function defaultCalendarRelation()
    {

        return $this->calendars()->where('isDefault', true);


    } // end function








    public function defaultCalendar()
    {

        return $this->calendars()->where('isDefault', true)?->first();


    } // end function







    public function subscriptions()
    {

        return $this->hasMany(CustomerSubscription::class, 'planId');

    } // end function







    public function activeCustomers()
    {


        // 1: getSubscriptions - customers
        $subscriptions = $this->subscriptions()?->where('startDate', '<=', $this->getCurrentDate())
                ?->where('untilDate', '>=', $this->getCurrentDate())
                ?->get()?->pluck('customerId')?->toArray() ?? [];


        $customers = Customer::whereHas('subscriptions')?->whereIn('id', $subscriptions)?->get();



        // :: return
        return $customers;



    } // end function







} // end model