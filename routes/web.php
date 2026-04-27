<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
// use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('about-evsk', [HomeController::class, 'about_evsk']);
Route::get('services', [HomeController::class, 'services']);
Route::get('evahan-suvidha-kendra', [HomeController::class, 'evahan_suvidha_kendra']);
Route::get('automated-testing-system', [HomeController::class, 'automated_testing_system']);
Route::get('automatic-driving-training-centre', [HomeController::class, 'automatic_driving_training_centre']);
Route::get('smart-traffic-parking-management-systems', [HomeController::class, 'smart_traffic_parking_management_systems']);

Route::get('blog', [HomeController::class, 'blog']);
// Route::get('blog-details', [HomeController::class, 'blog_details']);
Route::get('contact-us', [HomeController::class, 'contact']);
Route::post('contact-us', [HomeController::class, 'submit'])->name('contact.submit');
Route::get('faq', [HomeController::class, 'faq']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('special-projects', [HomeController::class, 'special_projects']);
Route::get('privacy-policy', [HomeController::class, 'privacy_policy']);
Route::get('terms-and-conditions', [HomeController::class, 'terms_and_conditions']);
Route::get('shipping-refund-policy', [HomeController::class, 'shipping_refund_policy']);
Route::get('join-our-team', [HomeController::class, 'join_our_team']);
Route::post('join-our-team', [HomeController::class, 'submitForm'])->name('jointeam.submitForm');
Route::get('thank-you', [HomeController::class, 'thank_you']);
Route::get('thank-you-form', [HomeController::class, 'thank_you_form']);



Route::get('seo-login', [AuthController::class, 'login']);
Route::post('seo-login', [AuthController::class, 'auth_login']);

Route::get('seo-register', [AuthController::class, 'register']);
Route::post('seo-register', [AuthController::class, 'create_user']);
Route::get('verify/{token}', [AuthController::class, 'verify']);

Route::get('seo-forgot-password', [AuthController::class, 'forgot']);
Route::post('seo-forgot-password', [AuthController::class, 'forgot_password']);

Route::get('seo-reset/{token}', [AuthController::class, 'reset']);
Route::post('seo-reset/{token}', [AuthController::class, 'post_reset']);


Route::get('logout', [AuthController::class, 'logout']);



Route::group(['middleware' => 'adminuser'], function(){

    Route::get('admin/change-password', [UserController::class, 'ChangePassword']);
    Route::post('admin/change-password', [UserController::class, 'UpdatePassword']);

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/user/list', [UserController::class, 'user']);
    Route::get('admin/user/add', [UserController::class, 'add_user']);
    Route::post('admin/user/add', [UserController::class, 'insert_user']);
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit_user']);
    Route::post('admin/user/edit/{id}', [UserController::class, 'update_user']);
    Route::get('admin/user/delete/{id}', [UserController::class, 'delete_user']);

    Route::get('admin/category/list', [CategoryController::class, 'category']);
    Route::get('admin/category/add', [CategoryController::class, 'add_category']);
    Route::post('admin/category/add', [CategoryController::class, 'insert_category']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit_category']);
    Route::post('admin/category/edit/{id}', [CategoryController::class, 'update_category']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete_category']);

    Route::get('admin/blog/list', [BlogController::class, 'blog']);
    Route::get('admin/blog/add', [BlogController::class, 'add_blog']);
    Route::post('admin/blog/add', [BlogController::class, 'insert_blog']);
    Route::get('admin/blog/edit/{id}', [BlogController::class, 'edit_blog']);
    Route::post('admin/blog/edit/{id}', [BlogController::class, 'update_blog']);
    Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete_blog']);


    // Route::get('admin/page/list', [PageController::class, 'page']);
    // Route::get('admin/page/add', [PageController::class, 'add_page']);
    // Route::post('admin/page/add', [PageController::class, 'insert_page']);
    // Route::get('admin/page/edit/{id}', [PageController::class, 'edit_page']);
    // Route::post('admin/page/edit/{id}', [PageController::class, 'update_page']);
    // Route::get('admin/page/delete/{id}', [PageController::class, 'delete_page']);

});


Route::get('{slug}', [HomeController::class, 'blogdetails']);

// Route::get('/submit-lead', [App\Http\Controllers\LeadController::class, 'submitLead'])->name('contact.submitLead');

// Route::post('/submit-lead', 'LeadController@submitLead')->name('contact.submitLead');

// Route::resource('/submit-lead', 'LeadController');
