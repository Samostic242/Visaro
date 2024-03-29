<?php

use App\Http\Controllers\Api\V1\Loans\Credits\CreditController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CreditController::class, 'fetchAllCredits']);
Route::get('/{credit_id}', [CreditController::class, 'fetchCredit']);
Route::get('/manage/user', [CreditController::class, 'fetchUserActiveCredits']);
Route::prefix('/requests')->controller(CreditController::class)->group(function () {
    Route::post('/', 'initiateCreditRequest');
    Route::post('/complete', 'completeCreditRequest');
    Route::get('/{credit_request_id}/status', 'getCreditRequestStatus');
});
