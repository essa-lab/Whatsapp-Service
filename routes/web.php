<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenerateInvoice;
use App\Http\Controllers\SocialAuthController;
use App\Livewire\Account;
use App\Livewire\Admin\Contact as AdminContact;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Payment as AdminPayment;
use App\Livewire\Admin\PaymentDetails;
use App\Livewire\Admin\PlanDetails;
use App\Livewire\Admin\Plans;
use App\Livewire\Admin\UserDetails;
use App\Livewire\Admin\Users;
use App\Livewire\ApiToken;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Error;
use App\Livewire\Instances;
use App\Livewire\MessagesList;
use App\Livewire\Payment;
use App\Livewire\PaymentStatus;
use App\Livewire\Profile;
use App\Livewire\Subscripe;
use App\Livewire\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('')->group(function(){
    Route::get('login/{service}', [SocialAuthController::class,'redirectToProvider'])->name('service-login');
    Route::get('login/{service}/callback', [SocialAuthController::class,'handleProviderCallback'])->name('service-callback');
    
    Route::get('/login',[AuthController::class,'loginView'])->name('page.login');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    
    
    
    Route::get('/register',function(){
        return view('auth.register');

    })->name('page.register');
    
    Route::get('/confirm',function(){
        return view('auth.confirm');

    })->name('page.confirm');

    Route::get('/confirm-account',[AuthController::class,'confirm'])->name('confirm');
    Route::get('/resend-mail',[AuthController::class,'resendMail'])->name('resend.confirm');

    Route::post('/register',[AuthController::class,'register'])->name('register');
    
    Route::get('/reset-password',[AuthController::class,'resetPassword'])->name('reset.password');
    Route::post('/request-new-password',[AuthController::class,'requestNewPassword'])->name('request.reset.password');
    Route::get('/confirm-new-password',[AuthController::class,'confirmResetPassword'])->name('confirm.reset');
    Route::post('/save-password',[AuthController::class,'saveNewPassword'])->name('set.password');
    Route::get('/resend-password',[AuthController::class,'resendPassword'])->name('resend.password');

    
});


Route::get('/account/error',Error::class)->name('error');

Route::middleware('auth')->group(function(){
    Route::get('/account/dashboard',Dashboard::class)->name('account.dashboard');

    Route::get('/account/instance/{sessionName}',Account::class)->name('instance');
    Route::get('/account/instances',Instances::class)->name('instances');
    Route::get('/account/subscriptions',Subscription::class)->name('subscriptions');
    Route::get('/account/subscription',Subscripe::class)->name('subscription');
    Route::get('/account/contact',Contact::class)->name('contact');
    Route::get('/account/profile',Profile::class)->name('profile');
    Route::get('/account/payment/{payment}',Payment::class)->name('payment');
    Route::get('/account/payment-status/{status}',PaymentStatus::class)->name('payment.status');
    Route::get('/account/messsages',MessagesList::class)->name('messages.list');

    Route::get('/account/api-token',ApiToken::class)->name('api.token');
    Route::get('/account/logout',function(){
        Auth::logout();
        return redirect(route('home'));
    })->name('logout');

});


Route::middleware('auth.admin')->group(function(){
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');

    Route::get('/admin/users',Users::class)->name('admin.users');
    Route::get('/admin/user/{id}',UserDetails::class)->name('admin.userDeatils');
    Route::get('/admin/plans',Plans::class)->name('admin.plans');
    Route::get('/admin/plans/{id}',PlanDetails::class)->name('admin.planDetails');

    Route::get('/admin/contact-us',AdminContact::class)->name('admin.contact');
    Route::get('/admin/payments',AdminPayment::class)->name('admin.payment');
    Route::get('/admin/payments/{id}',PaymentDetails::class)->name('admin.payment.details');


    
});

Route::get('/generate-invoice/{id}',[GenerateInvoice::class,'generate'])->name('generate.pdf');