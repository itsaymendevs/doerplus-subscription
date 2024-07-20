<?php

use App\Livewire\Website\Plans;
use App\Livewire\Website\PlansFifth;
use App\Livewire\Website\PlansFourth;
use App\Livewire\Website\PlansSecond;
use App\Livewire\Website\PlansThird;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;








// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- GENERAL ---------------------------------









// :: linkStorage
Route::get('/storage-link', function () {

    $return = Artisan::call('storage:link');

});








// :: LivewireServerDeployment in subRoute
if (env('APP_ENV') == 'production') {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(env('LIVEWIRE_UPDATE_PATH'), $handle);
    });


    Livewire::setScriptRoute(function ($handle) {
        return Route::get(env('LIVEWIRE_JAVASCRIPT_PATH'), $handle);
    });

} // end if










// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ------------------------------ PLANS ----------------------------------




// 1: plans
Route::get('/', Plans::class)->name('website.home');
Route::get('/plans', Plans::class)->name('website.plans');
Route::get('/plans-v2', PlansSecond::class)->name('website.plansV2');
Route::get('/plans-v3', PlansThird::class)->name('website.plansV3');
Route::get('/plans-v4', PlansFourth::class)->name('website.plansV4');
Route::get('/plans-v5', PlansFifth::class)->name('website.plansV5');






