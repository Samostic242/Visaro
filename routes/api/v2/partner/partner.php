<?php

use App\Http\Controllers\Api\V2\Partner\PartnerController;
use Illuminate\Support\Facades\Route;



Route::prefix('auth')->group(function () {
    Route::post('login', [PartnerController::class, 'login']);
});


Route::prefix('loans')->middleware('auth:partner')->group(function () {
    Route::get('/', [PartnerController::class, 'getLoanRequest']);
    Route::post('/loan-action', [PartnerController::class, 'LoanAction']);
});

Route::middleware('auth:partner')->group(function () {
    Route::post('/update', [PartnerController::class, 'updatePartner']);
    Route::get('/dashboard', [PartnerController::class, 'getPartnerAnalytics']);
});
