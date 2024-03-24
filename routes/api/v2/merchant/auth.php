<?php

use App\Http\Controllers\Api\V2\Merchant\Auth\MerchantAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('forgot-password', [MerchantAuthenticationController::class, 'forgotPassword']);
    Route::post('reset-password', [MerchantAuthenticationController::class, 'resetPassword']);
});
