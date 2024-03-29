<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use Illuminate\Support\Facades\Route;


Route::prefix('banking')->middleware('auth:api')->group(function () {
    Route::post('create', [BankingController::class, 'createBank']);
});
