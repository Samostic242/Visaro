<?php

use App\Http\Controllers\api\v1\Loans\Creditor\CreditorController;
use Illuminate\Support\Facades\Route;

Route::post('/', [CreditorController::class, 'createCreditorRecord']);
Route::get('/', [CreditorController::class, 'fetchCreditors']);
Route::get('/{creditor_id}', [CreditorController::class, 'fetchCreditor']);
Route::prefix('/{creditor_id}')->controller(CreditorController::class)->group(function () {
    Route::patch('/update', 'updateCreditorRecord');
    Route::delete('/delete', 'deleteCreditor');
    Route::get('/conditions', 'fetchCreditorConditions');
    Route::patch('/conditions/update', 'updateCreditorConditions');
});
