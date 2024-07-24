<?php

use App\Livewire\Website\Plans;
use App\Livewire\Website\Plans\PlansCustomization;
use App\Livewire\Website\Plans\SinglePlan;
use App\Livewire\Website\PlansEighth;
use App\Livewire\Website\PlansFifth;
use App\Livewire\Website\PlansFirst;
use App\Livewire\Website\PlansFourth;
use App\Livewire\Website\PlansSecond;
use App\Livewire\Website\PlansSeventh;
use App\Livewire\Website\PlansSixth;
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
Route::get('/', PlansFirst::class)->name('website.home');
Route::get('/plans', Plans::class)->name('website.plans');





// 1.2: versions
Route::get('/plans-v1', PlansFirst::class)->name('website.plansV1');
Route::get('/plans-v2', PlansSecond::class)->name('website.plansV2');
Route::get('/plans-v3', PlansThird::class)->name('website.plansV3');
Route::get('/plans-v4', PlansFourth::class)->name('website.plansV4');
Route::get('/plans-v5', PlansFifth::class)->name('website.plansV5');
Route::get('/plans-v6', PlansSixth::class)->name('website.plansV6');
Route::get('/plans-v7', PlansSeventh::class)->name('website.plansV7');









// ---------------------------------------------------------------------------





// 2: singlePlan
Route::get('/plans/{name}', SinglePlan::class)->name('website.singlePlan');







// ---------------------------------------------------------------------------






// 3: plans - customization
Route::get('/plans/{name}/customization', PlansCustomization::class)->name('website.plans.customization');

