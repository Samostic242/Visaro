<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use App\Http\Controllers\Api\V2\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;



Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});
Route::get('dashboard', [AuthController::class, 'fetchOverview'])->middleware('auth:admin');


