<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
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

// Route::get('/Admin', function () {
//     return view('Admin.login.login');
// });
// Route::get('/Admin/Slider',function (){
//     return view('Admin.Slider.Create');
// });
// Route::get('/Admin/Service',function (){
//     return view('Admin.Service.Create');
// });
Route::middleware(['auth'])->group(function(){
Route::resource('sliders',SliderController::class);
Route::resource('services',ServicesController::class);
});
Route::resource('company',CompanyController::class,['except'=>['create','store','destroy']]);
Route::get('/',[FrontController::class,'index'])->name('index');
Route::middleware(['guest'])->group(function(){
    Route::get('/Admin',[AuthController::class,'fill'])->name('login.fill');
   Route::post('/login',[AuthController::class,'login'])->name('login');
});
Route::get('/logout',[AuthController::class,'logout'])->name('logout');