<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('frontend.home');
})->name('index');

Route::get('/login_process', function () {
    if (Auth::check()){
        if (Auth::user()->role==1){
            return Redirect::route('backend.dashboard')->with('success','Welcome Back '.Auth::user()->name);
        }else{
            return Redirect::route('frontend.dashboard')->with('success','Welcome Back '.Auth::user()->name);
        }
    }
})->name('frontend.login_process');

Route::group(['middleware'=>['auth:sanctum'],'as'=>'frontend.'],function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::match(['get','post'],'/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::match(['get','post'],'/wallet', [DashboardController::class, 'wallet'])->name('wallet');
    Route::match(['get','post'],'/refer_code', [DashboardController::class, 'refer_code'])->name('refer_code');


});


