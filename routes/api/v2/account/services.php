<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use App\Http\Controllers\Api\V2\Account\Services\CardController;
use App\Http\Controllers\Api\V2\Account\Services\FlightController;
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
        Route::get('/', [CardController::class, 'fetchCard']);
        Route::post('/', [CardController::class, 'create']);
        Route::post('/update', [CardController::class, 'editCard']);
        Route::delete('/{card_id}', [CardController::class, 'deleteCard']);
    });

    Route::prefix('banks')->middleware('auth:api')->group(function () {
        Route::post('enquiry', [BankingController::class, 'fetchAccountDetails']);
    });
});
Route::get('installments', [FlightController::class, 'getInstallmentPlan'])->middleware('auth:api');
Route::get('loans', [FlightController::class, 'getLoansRequest'])->middleware('auth:api');

Route::prefix('booked-flights')->middleware('auth:api')->group( function () {
    Route::get('/', [FlightController::class, 'getBookedFlights']);
    Route::get('get-payment-transactions', [FlightController::class, 'fetchUserFlightTransaction']);
    Route::get('/{id}/tickets', [FlightController::class, 'getFlightDetails']);
});
