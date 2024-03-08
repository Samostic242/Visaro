<?php

use App\Http\Controllers\api\V2\Onboarding\Registration\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::prefix('users')->group(function (){
    Route::post('register', [RegistrationController::class, 'register']);
    Route::post('email', [RegistrationController::class, 'getOTP']);
    Route::post('update', [RegistrationController::class, 'updateUser'])->middleware('auth:api');
});
