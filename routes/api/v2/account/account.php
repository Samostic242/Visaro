<?php

use App\Http\Controllers\Api\v2\auth\AuthController;
use App\Http\Controllers\Api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->middleware('auth:api')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('profile', [AuthController::class, 'fetchUser']);
        Route::post('update', [RegistrationController::class, 'updateUser']);
    });
});
