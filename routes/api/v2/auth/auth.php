<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\v2\auth\AuthController;
=======
use App\Http\Controllers\Api\V2\auth\AuthController;
>>>>>>> 7c2bc70a5b335d2dcf8e0ab5201e3c0c7ab9ee3f
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
});
