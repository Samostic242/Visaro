<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::prefix('auth')->group(function () {
//        Route::post('login', LoginController::class);
        Route::prefix('register')->group(function () {
            Route::prefix('merchant')->group(function () {
//                Route::controller(MerchantRegisterController::class)->group(function () {
//                    Route::post('/', 'sendUserRegisterationOtp');
//                    Route::post('verify', 'verifyUserRegisterationOtp');
//                    Route::post('update', 'updateUserInformation');
//                });
            });
//        });
        });
    });
});
