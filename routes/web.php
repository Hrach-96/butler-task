<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ServiceController;

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
Route::post('/change-language',[MainController::class,'change_language'])->name('change.language');
Route::group([ 'prefix' => '/{lang?}' ], function ($lang = 'en') {
	if(Request::segment(1) && in_array(Request::segment(1), config('app.available_languages'))){
		App::setLocale(Request::segment(1));
	}
	elseif(Request::segment(1) == ''){
		// for future
		App::setLocale('en');
	}
	else{
		App::setLocale('en');
	}
	Route::get('/', [MainController::class,'index'])->name('main');
	Route::get('/logout',[MainController::class,'logout'])->name('main.logout');
	Route::get(__('msg.profille-addresses-route'), [ProfileController::class,'index'])->name('profile.addresses');
	Route::get(__('msg.bookings-route'), [ProfileController::class,'bookings'])->name('bookings');
	Route::get(__('msg.referrals-route'), [ProfileController::class,'referrals'])->name('referrals');
	Route::get(__('msg.credits-route'), [ProfileController::class,'credits'])->name('credits');
	Route::get(__('msg.payment-methods-route'), [ProfileController::class,'payment_methods'])->name('payment.method');
	Route::get(__('msg.add-new-card-route'), [ProfileController::class,'add_new_card'])->name('add.new.card');
	Auth::routes();

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
// Admin - Super admin
Route::group(['prefix' => '/admin/'],function(){
	Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
	// Service Main Category
	Route::get('service-main-category-list', [ServiceController::class,'service_main_category_list'])->name('service.main.category.list');
	Route::any('service-main-category-add', [ServiceController::class,'service_main_category_add'])->name('service.main.category.add');
	Route::any('service-main-category-edit', [ServiceController::class,'service_main_category_edit'])->name('service.main.category.edit');
	Route::any('service-main-category-delete', [ServiceController::class,'service_main_category_delete'])->name('service.main.category.delete');
});