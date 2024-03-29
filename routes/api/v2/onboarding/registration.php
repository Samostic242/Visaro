<?php

use App\Http\Controllers\Api\V2\Onboarding\Registration\RegistrationController;
use App\Http\Controllers\Api\V2\Onboarding\Verification\VerificationController;
use Illuminate\Support\Facades\Route;


Route::prefix('users')->group(function () {
    Route::prefix('onboarding')->group(function () {
        Route::post('register', [RegistrationController::class, 'register']);
        Route::post('email', [RegistrationController::class, 'getOTP']);
        Route::prefix('verifications')->group(function () {
            Route::post('email-resend-otp', [VerificationController::class, 'resendOtp']);
            Route::post('verify-email-otp', [VerificationController::class, 'verifyOtp']);
        });
    });
});
