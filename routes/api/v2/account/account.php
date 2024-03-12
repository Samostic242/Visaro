<?php

use App\Http\Controllers\api\v2\auth\AuthController;
use App\Http\Controllers\api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->middleware('auth:api')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('/profile', [AuthController::class, 'fetchUser']);
        Route::post('update', [RegistrationController::class, 'updateUser']);
    });
});
