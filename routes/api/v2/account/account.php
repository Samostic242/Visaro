<?php

use App\Http\Controllers\Api\V2\Account\Settings\SettingsController;
use App\Http\Controllers\Api\V2\Auth\AuthController;
use App\Http\Controllers\Api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::prefix('user')->middleware('auth:api')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('profile', [AuthController::class, 'fetchUser']);
        Route::post('update', [RegistrationController::class, 'updateUser']);
    });
    Route::prefix('settings')->group(function () {
        Route::post('change-email', [SettingsController::class, 'getOtpForChangingEmail']);
        Route::post('complete-email-change-request', [SettingsController::class, 'completeEmailChangeRequest']);
        Route::post('contact-us', [SettingsController::class, 'contactUs']);


    });
});
