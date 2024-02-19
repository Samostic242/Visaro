<?php

use App\Http\Controllers\api\v2\auth\AuthController;
use Illuminate\Support\Facades\Route;



Route::prefix('user')->group(function (){
    Route::post('login', [AuthController::class, 'login']);
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('reset-password', [AuthController::class, 'resetPassword']);

    Route::get('/', [AuthController::class, 'fetchUser'])->middleware('auth:api');
});
