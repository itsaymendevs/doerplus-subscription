<?php

namespace App\Providers;

use App\Models\Profile;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{



    use HelperTrait;



    public function register() : void
    {


    } // end function






    // -------------------------------------------------------------------




    public function boot() : void
    {




        // 1.2: todayDate - tmwDate
        View::share('globalTodayDate', $this->getCurrentDate());
        View::share('globalNextDate', $this->getNextDate());





        // 1.3: globalCounter
        View::share('globalSNCounter', 1);





        // 1.4: fonts
        $profile = Profile::first();

        View::share('globalProfile', $profile);
        View::share('fontLinks', $profile?->fontLinks);







        // 1.5: storagePath
        View::share('storagePath', env('APP_STORAGE'));


    } // end function



} // end provider



