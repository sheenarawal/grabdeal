<?php

namespace App\Http\Controllers;

Use Illuminate\Support\Facades\Route;




Route::group(['prefix'=>'admin','middleware'=>['auth:sanctum', config('jetstream.auth_session'), 'verified','isAdmin'],'as'=>'backend.'],function (){
    Route::get('/dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('wallet',Backend\WalletController::class);
    Route::group(['prefix'=>'wallet','as'=>'wallet.'],function (){
        Route::get('/user/{user}', [Backend\WalletController::class, 'user'])->name('user');
    });
    Route::resource('coinProfit',Backend\CoinProfitController::class);
    Route::group(['prefix'=>'coinProfit','as'=>'coinProfit.'],function (){
        Route::post('/update/{coinProfit}', [Backend\CoinProfitController::class, 'update'])->name('update');
        Route::get('/delete/{coinProfit}', [Backend\CoinProfitController::class, 'destroy'])->name('delete');
    });

    Route::get('profile',[Backend\ProfileController::class,'index'])->name('profile');
});
