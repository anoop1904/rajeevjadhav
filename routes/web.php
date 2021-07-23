<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedCoachSessionController;
use App\Http\Controllers\Auth\RegisteredCoachController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoachDetailController;
use App\Http\Controllers\CoachLoginController;
use App\Http\Controllers\CreaditController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PromocodeController;
use App\Http\Controllers\Coach\ForgotPasswordController;
use App\Http\Controllers\front\ResponseController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\CustomerProfileController;
use App\Http\Controllers\front\CustomerQuestionController;
use App\Http\Controllers\front\CustomerRegistrationController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\LoginController;
use App\Http\Controllers\front\PaymentController;
use App\Http\Controllers\front\RegisterController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\TestimonialController;
use App\Http\Controllers\ServiceQusetionsController;
use App\Http\Controllers\Testmcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/clear', function () {  Artisan::call('cache:clear'); return "cache clear"; });
Route::get('/cache', function () {  Artisan::call('config:cache'); return "config cache"; });
// Route::get('/', function(){
//     return  redirect('/admin');
//     // return view('welcome');
// });

Route::prefix('admin')->middleware(['auth'])->group(function () {
Route::get('/', [AdminController::class, 'index']);
Route::get('/profile/{id}', [AdminController::class, 'profile']);
Route::get('/editadmin_profile/{id}', [AdminController::class, 'edit_profile']);
Route::post('/updatedadmin_profile/{id}', [AdminController::class, 'update_profile']);
Route::get('/coach',[CoachController::class,'index']); 
Route::get('/create_coach',[RegisteredCoachController::class,'create'])->name('create_coach');
Route::post('/store_coach',[RegisteredCoachController::class,'store'])->name('store_coach');
Route::get('/edit_profile/{id}', [AdminController::class, 'edit_coachprofile']);
Route::post('/update_coach/{id}', [AdminController::class, 'update_coach']);

Route::get('/question',[QuestionController::class,'index']);
Route::get('/add_question',[QuestionController::class,'add_question']);

Route::post('/submit_question',[QuestionController::class,'submit_question']);
Route::get('/show_question/{id}',[QuestionController::class,'show_question']);
Route::get('/edit-questions/{id}',[QuestionController::class,'editquestion']);
Route::post('/edit-questions',[QuestionController::class,'updatequestions']);
Route::get('/delete_question/{id}',[QuestionController::class,'delete_question']);

Route::get('/show_role',[RoleController::class,'showrole']);
Route::get('add_role',[RoleController::class,'addrole']);
Route::post('/add_role',[RoleController::class,'saverole']);
Route::get('/delete/{id}',[RoleController::class,'deleterole']);

Route::get('/package',[PackageController::class,'package']);   
Route::get('/add-package',[PackageController::class,'addpackage']);   
Route::post('/add-package',[PackageController::class,'savepackage']); 
Route::get('/edit-package/{id}',[PackageController::class,'editpackage']);
Route::post('/edit-package',[PackageController::class,'updatepackage']); 
Route::get('/delete-package/{id}',[PackageController::class,'deletepackage']);

Route::get('/customers',[CustomerController::class,'customerdetails']);
Route::get('/customerslist',[CustomerController::class,'customerlist']);
Route::get('/guestlist',[CustomerController::class,'guestlist']);
Route::get('/response/{id}', [CustomerController::class, 'response']);

Route::get('/promocode',[PromocodeController::class,'promocode']);   
Route::get('/add-promocode',[PromocodeController::class,'addpromocode']);   
Route::post('/add-promocode',[PromocodeController::class,'savepromocode']);  
Route::get('/edit-promocode/{id}',[PromocodeController::class,'editpromocode']);  
Route::post('/edit-promocode',[PromocodeController::class,'updadtepromocode']);  
Route::get('/delete-promocode/{id}',[PromocodeController::class,'deletepromocode']);

Route::get('/serviceType',[ServiceQusetionsController::class,'showserviceType']);
Route::get('/add-serviceType',[ServiceQusetionsController::class,'addserviceType']);
Route::post('/add-serviceType',[ServiceQusetionsController::class,'saveserviceType']);
Route::get('/edit-serviceType/{id}',[ServiceQusetionsController::class,'editserviceType']);
Route::post('/edit-serviceType',[ServiceQusetionsController::class,'saveserviceType']);
Route::get('/delete-serviceType/{id}',[ServiceQusetionsController::class,'deleteserviceType']); 

Route::get('/add-testimonial',[Testmcontroller::class,'addtestm']);
Route::post('/add-testimonial',[Testmcontroller::class,'savetestm']);
Route::get('/testimonial',[Testmcontroller::class,'viewtestm']);
Route::get('/delete-testimonial/{id}',[Testmcontroller::class,'delete']); 
Route::get('/active-testimonial/{id}',[Testmcontroller::class,'active']); 
Route::get('/edit-testimonial/{id}',[Testmcontroller::class,'edit']); 
Route::post('/edit-testimonial',[Testmcontroller::class,'update']); 
Route::get('/contactus',[ContactController::class,'contactus']); 
});

Route::post('/admin/edit_coach',[RegisteredCoachController::class,'edit_coach']);
Route::get('/admin/delete_coach/{id}',[RegisteredCoachController::class,'delete_coach']);


Route::get('/login_coach',[CoachLoginController::class,'create'])->name('login_coach');
Route::post('/login_coach',[CoachLoginController::class,'store']);

Route::prefix('coach')->middleware(['coach'])->group(function () {
    Route::get('/', [CoachDetailController::class, 'index']);  
    Route::get('/profile/{id}', [CoachDetailController::class, 'profile']);
    Route::get('/edit_profile/{id}', [CoachDetailController::class, 'edit_profile']);
    Route::post('/update_coach/{id}', [CoachDetailController::class, 'update_coach']);
    Route::get('/response/{id}', [CoachDetailController::class, 'response']);
    Route::post('/response/{id}', [CoachDetailController::class, 'saveresponse']);
});
  
Route::get('/coach/forgot_password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/coach/forgot_password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('/coach/reset_password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/coach/reset_password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Route::get('/coach/forgot_password', [CoachDetailController::class, 'create']);
// Route::post('/coach/forgot_password', [CoachDetailController::class, 'store']);

Route::post('/coach_logout', [CoachController::class, 'destroy'])->name('coach_logout');
// varsha routes start 
//role
Route::get('/role/add-module',[RoleController::class,'addModule']);
Route::post('/role/add-module',[RoleController::class,'saveModule']);
Route::get('/role/edit-permission/{id}',[RoleController::class,'editpermission']);
Route::post('/role/save-permission',[RoleController::class,'savepermission']);

Route::get('/role/permission',[RoleController::class,'permission']);

Route::get('/role/menubar',[RoleController::class,'menu']);

Route::get('/navbar',[RoleController::class,'shownavbar']);

// varsha routes end 

// customer routes start here 

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/services', [ServiceController::class,'index']);
//Route::get('/service-details', [ServiceController::class,'service_details']);
Route::get('/testimonials', [TestimonialController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/bookme', [ContactController::class,'bookme']);
Route::get('/service-details-soulmate', [ServiceController::class,'service_details_soulmate']);
Route::get('/service-details-influencer', [ServiceController::class,'service_details_influencer']);
Route::get('/service-details-business', [ServiceController::class,'service_details_business']);
Route::get('/service-details-corporate', [ServiceController::class,'service_details_corporate']);
Route::get('/service-details-private', [ServiceController::class,'service_details_private']);


Route::get('/schedule-call', [ServiceController::class,'schedule_call']);

Route::get('/payment-thankyou', [PaymentController::class,'payment_thankyou']);
Route::get('/call_package', [PaymentController::class,'call_package']);
Route::post('/payment_withold', [PaymentController::class,'payment_withold']);
Route::get('/payment_process', [PaymentController::class,'payment_process']);
Route::post('/apply_coupon', [PaymentController::class,'apply_coupon']);



Route::get('/customer/register', [CustomerRegistrationController::class,'index']);
Route::post('/customer/register', [CustomerRegistrationController::class,'store']);
Route::get('/customer/login', [LoginController::class,'index']);
Route::post('/customer/login', [LoginController::class,'store']);
Route::get('/customer/logout', [LoginController::class,'destroy']);

Route::get('/customer/pfofile', [CustomerProfileController::class,'index'])->middleware('customer');
Route::get('/customer/response', [CustomerProfileController::class,'response'])->middleware('customer');
Route::get('/customer/creadit', [CustomerProfileController::class,'creadit'])->middleware('customer');
Route::get('/customer/change_password', [CustomerProfileController::class,'change_password'])->middleware('customer');
Route::post('/customer/update_password', [CustomerProfileController::class,'update_password'])->middleware('customer');
Route::post('/customer/book_call_schedule', [CustomerProfileController::class,'book_call_schedule']);
Route::post('/contactus',[ContactController::class,'savecontactus']); 

Route::get('/customer/google_form', [CustomerProfileController::class,'google_form']);

Route::fallback(function () {
    return view('welcome');
});

Route::any('/customer/question/submit', [CustomerQuestionController::class, 'store']);
Route::post('/admin/edit_question_status', [CustomerQuestionController::class, 'edit_question_status']);

Route::any('/servicetypeques', [QuestionController::class, 'getservicetype']);

Route::any('/chech_creadit', [CreaditController::class, 'chech_creadit']);
Route::any('/add_amount', [CreaditController::class, 'add_amount']);
Route::any('/add_amount_balance', [CreaditController::class, 'add_amount_balance']);
Route::post('/payment_with_paypal', [CreaditController::class, 'paymentWithPaypal']);
Route::post('/payment_with_wallet', [CreaditController::class, 'paymentWithWallet']);
Route::post('/payment_with_both', [CreaditController::class, 'paymentWithBoth']);
Route::any('/check_creadit', [CreaditController::class, 'checkCreadit']);

Route::post('/response_ajax_status', [AjaxController::class, 'response_ajax_status']);

Route::get('/discover_page', function(){
    return  view('customer.calendly');
});

Route::post('read_unread',[ResponseController::class,'read_unread']);
Route::post('customer_notification_update',[ResponseController::class,'customer_notification_update']);



// customer routes end here 
require __DIR__.'/auth.php';