<?php

use App\Http\Controllers\api\V2\Account\Services\BankingController;
use Illuminate\Support\Facades\Route;




Route::prefix('banking')->group(function (){
    Route::prefix('beneficiary')->group(function (){
       Route::post('/', [BankingController::class, 'addBeneficiary'])->middleware('auth:api');
       Route::get('/', [BankingController::class, 'allBeneficiaries'])->middleware('auth:api');

    });
});
