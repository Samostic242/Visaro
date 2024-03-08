<?php

use App\Http\Controllers\api\V2\Onboarding\Verification\VerificationController;
use Illuminate\Support\Facades\Route;



Route::prefix('users')->group(function (){
    Route::post('email-resend-otp', [VerificationController::class, 'resendtOtp']);
    Route::post('verify-email-otp', [VerificationController::class, 'verifyOtp']);

});
