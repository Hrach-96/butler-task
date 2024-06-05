<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;

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
Route::get('/', [MainController::class,'index'])->name('main');
Route::get('/logout',[MainController::class,'logout'])->name('main.logout');
Route::get('/profile-addresses', [ProfileController::class,'index'])->name('profile.addresses');
Route::get('/bookings', [ProfileController::class,'bookings'])->name('bookings');
Route::get('/referrals', [ProfileController::class,'referrals'])->name('referrals');
Route::get('/credits', [ProfileController::class,'credits'])->name('credits');
Route::get('/payment-methods', [ProfileController::class,'payment_methods'])->name('payment.method');
Route::get('/add-new-card', [ProfileController::class,'add_new_card'])->name('add.new.card');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
