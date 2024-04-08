<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\v2\auth\AuthController;
=======
use App\Http\Controllers\Api\V2\auth\AuthController;
>>>>>>> 7c2bc70a5b335d2dcf8e0ab5201e3c0c7ab9ee3f
use App\Http\Controllers\Api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->middleware('auth:api')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('profile', [AuthController::class, 'fetchUser']);
        Route::post('update', [RegistrationController::class, 'updateUser']);
    });
});
