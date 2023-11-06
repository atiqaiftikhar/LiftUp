<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarPassingController;
use App\Http\Controllers\CarwashController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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



        //   Frontend pages
         Route::get("home",[HomeController::class,'home']);
         Route::get("contactus",[ContactController::class,'index']);
         Route::get("aboutus",[AboutController::class,'index']);
         Route::get("services",[ServiceController::class,'index']);
         Route::get("carwash",[CarwashController::class,'index']);
         Route::get("carpassing",[CarPassingController::class,'index']);
         Route::get("recovery",[RecoveryController::class,'index']);


      Route::get('/', function(){
          return view('admin');
          })->name('admin.index');


     Route::group(['prefix'=>'admin'],function(){


     Route::group(['prefix' => '/user'], function() {
        Route::get('/',[UserController::class,'user'])->name('user.index');

    });

     Route::group(['prefix' =>'/category'], function() {
        Route::get('/',[CategoryController::class,'category'])->name('category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::get('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    });

    Route::group(['prefix' =>'/service'], function() {
        Route::get('/',[ServiceController::class,'service'])->name('service.index');
        Route::get('/create',[ServiceController::class,'create'])->name('service.create');
        Route::post('/store',[ServiceController::class,'store'])->name('service.store');
        Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
        Route::get('/update/{id}',[ServiceController::class,'update'])->name('service.update');
        Route::get('/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');

    });




});


Auth::routes();
