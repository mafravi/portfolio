<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\HomeController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Administrator\AboutController;
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


// Route::get('/home/setting/{id}', [App\Http\Controllers\Front\FrontController::class,'index']);

Route::get('/', [App\Http\Controllers\Front\FrontController::class,'index'])->name('front');

Auth::routes();




Route::middleware('admin')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   
    Route::resource('/home/setting', App\Http\Controllers\Administrator\HomeController::class)->parameters(['setting'=>'id']);
    
    route::get('/home/setting/{id}',[App\Http\Controllers\Administrator\HomeController::class,'destroy']);
    
    route::resource('/home/about',App\Http\Controllers\Administrator\AboutController::class)->parameters(['about'=>'id']);
    
    route::get('/home/about/{id}',[App\Http\Controllers\Administrator\AboutController::class,'destroy']);

});
