<?php

use App\Http\Controllers\MailController;
use App\Livewire\Portals\Customer\CustomerLogin;
use App\Livewire\Portals\Customer\CustomerProfile;
use App\Livewire\Website\Plans;
use App\Livewire\Website\Plans\PlansCart;
use App\Livewire\Website\Plans\PlansCheckout;
use App\Livewire\Website\Plans\PlansCustomization;
use App\Livewire\Website\Plans\PlansInvoice;
use App\Livewire\Website\Plans\SinglePlan;
use App\Livewire\Website\PlansEighth;
use App\Livewire\Website\PlansFifth;
use App\Livewire\Website\PlansFirst;
use App\Livewire\Website\PlansFourth;
use App\Livewire\Website\PlansSecond;
use App\Livewire\Website\PlansSeventh;
use App\Livewire\Website\PlansSixth;
use App\Livewire\Website\PlansThird;
use App\Livewire\Website\PrivacyPolicy;
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
// ** ---------------------------- CUSTOMER ---------------------------------




// 1: login
Route::get('/portals/customer/login', CustomerLogin::class)->name('portals.customer.login');






// 2: profile
Route::get('/portals/customer/profile', CustomerProfile::class)->name('portals.customer.profile');





















// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ------------------------------ PLANS ----------------------------------






// 1: plans
Route::get('/', Plans::class)->name('website.home');
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








// 2: renew - invoice
Route::get('/plans/invoice', PlansInvoice::class)->name('website.plans.invoice');
Route::get('/plans/{token}', Plans::class)->name('website.plansWithToken');







// ---------------------------------------------------------------------------







// 3: singlePlan
Route::get('/plans/{name}/details', SinglePlan::class)->name('website.plans.details');







// ---------------------------------------------------------------------------






// 4: plans - customization or cart
Route::get('/plans/{name}/cart', PlansCart::class)->name('website.plans.cart');
Route::get('/plans/{name}/customization', PlansCustomization::class)->name('website.plans.customization');





// 4.5: plans - checkout
Route::get('/plans/{name}/checkout', PlansCheckout::class)->name('website.plans.checkout');




















// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- EMAIL -------------------------------- **





// 1: Email - invoice
Route::get('mails/invoice/{id}', [MailController::class, 'invoice'])->name('mails.invoice');














// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- BLOGS -------------------------------- **





// 1: blogs
Route::get('blogs', [Plans::class, 'blogs'])->name('website.blogs');










// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ---------------------------- POLICY -------------------------------- **





// 1: blogs
Route::get('/policy', PrivacyPolicy::class)->name('website.policy');



