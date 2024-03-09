<?php

use App\Http\Controllers\api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('users')->group(function () {
    Route::prefix('onboarding')->group(function () {
        Route::post('register', [RegistrationController::class, 'register']);
        Route::post('email', [RegistrationController::class, 'getOTP']);
    });
    Route::prefix('account')->middleware('auth:api')->group(function () {
        Route::post('update', [RegistrationController::class, 'updateUser']);
    });
});
