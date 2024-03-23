<?php

use App\Http\Controllers\api\V2\Merchant\Auth\MerchantAuthenticationController;
use App\Http\Controllers\api\V2\Merchant\Onboarding\Registration\MerchantRegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('merchant')->middleware('auth:merchant')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('/profile', [MerchantAuthenticationController::class, 'fetchMerchant']);
        Route::post('update', [MerchantRegistrationController::class, 'update']);
    });
});
