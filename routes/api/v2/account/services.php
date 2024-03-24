<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use App\Http\Controllers\Api\V2\Account\Services\CardController;
use Illuminate\Support\Facades\Route;


Route::prefix('banking')->group(function () {
    Route::get('/banks', [BankingController::class, 'getBanks']);
    Route::prefix('beneficiary')->middleware('auth:api')->group(function () {
        Route::post('/', [BankingController::class, 'addBeneficiary']);
        Route::get('/', [BankingController::class, 'allBeneficiaries']);
    });
    Route::prefix('bank-account')->middleware('auth:api')->group(function () {
        Route::post('/', [BankingController::class, 'createBankAccount']);
        Route::get('/', [BankingController::class, 'fetchBankAccount']);
    });

    Route::prefix('card')->middleware('auth:api')->group(function () {
        Route::post('/', [CardController::class, 'create']);
        Route::get('/', [CardController::class, 'fetchCard']);
        Route::delete('/{card_id}', [CardController::class, 'deleteCard']);
    });

    Route::prefix('banks')->middleware('auth:api')->group(function () {
        Route::post('enquiry', [BankingController::class, 'fetchAccountDetails']);
        // Route::post('V2B')
    });

});
