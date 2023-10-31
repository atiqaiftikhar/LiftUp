<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarPassingController;
use App\Http\Controllers\CarwashController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\ServiceController;
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



 //   Frontend pages
 Route::get("home",[HomeController::class,'home']);
 Route::get("contactus",[ContactController::class,'index']);
 Route::get("aboutus",[AboutController::class,'index']);
 Route::get("services",[ServiceController::class,'index']);
 Route::get("carwash",[CarwashController::class,'index']);
 Route::get("carpassing",[CarPassingController::class,'index']);
 Route::get("recovery",[RecoveryController::class,'index']);

Route::get('/', function () {
    return view('admin');
});
