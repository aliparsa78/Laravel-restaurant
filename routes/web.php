<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckUser;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ReservationController;
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
Route::middleware(['auth','checkuser'])->group(function(){

    Route::get('/redirect',[HomeController::class,'redirect']);
    Route::resource('/customer',CustomerController::class);
    Route::post('/customer_block',[CustomerController::class,'blockCustomer']);
    Route::post('/customer_unblock',[CustomerController::class,'unblock']);
    Route::get('/block',[CustomerController::class,'block']);
    // Food route
    Route::resource('/food',FoodController::class);

    // Chef route
    Route::resource('/chef',ChefController::class);

    // Slider
    Route::resource('/slider',SlideController::class);
    Route::post('/slider.deactive',[SlideController::class,'deactive'])->name('slider.deactive');
    Route::post('/slider.active',[SlideController::class,'active'])->name('slider.active');
    // Reservation part
    Route::resource('/reserve',ReservationController::class);
});

// Customer Logined 
Route::middleware(['auth','customer'])->group(function(){
    Route::post('reservation',[ReservationController::class,'store']);
});

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
