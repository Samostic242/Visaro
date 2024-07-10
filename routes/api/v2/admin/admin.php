<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use App\Http\Controllers\Api\V2\Admin\Auth\AuthController;
use App\Http\Controllers\Api\V2\Admin\Merchant\MerchantController;
use App\Http\Controllers\Api\V2\Admin\Notification\NotificationController;
use App\Http\Controllers\Api\V2\Admin\Support\SupportController;
use App\Http\Controllers\Api\V2\Admin\User\UserController;
use App\Http\Controllers\Api\V2\Partner\PartnerController;
use Illuminate\Support\Facades\Route;






Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AuthController::class, 'fetchAdminUser']);
    Route::get('dashboard', [AuthController::class, 'fetchOverview']);
    Route::get('users', [UserController::class, 'getUserStatistics']);
    Route::get('users/{id}', [UserController::class, 'getSingleUser']);
    Route::get('get-all-admin', [AuthController::class, 'fetchAllAdmin']);
    Route::get('support', [SupportController::class, 'getAllSupport']);
    Route::post('create-admin', [AuthController::class, 'createAdminUser']);
    Route::post('send-notification', [NotificationController::class, 'sendNotification']);


});

Route::prefix('merchants')->middleware('auth:admin')->group(function () {
    Route::get('/', [MerchantController::class, 'getMerchants']);
    Route::post('/', [MerchantController::class, 'createMerchant']);
    Route::get('search', [MerchantController::class, 'getMerchantsSearchResults']);
    Route::get('/{id}', [MerchantController::class, 'getMerchant']);
    Route::get('/{id}/history', [MerchantController::class, 'getMerchantHistory']);
    Route::post('/{id}/activate', [MerchantController::class, 'activateMerchant']);
    Route::post('/{id}/deactivate', [MerchantController::class, 'deactivateMerchant']);
});

Route::prefix('partner')->middleware('auth:admin')->group(function () {
    // Route::get('/', [PartnerController::class, 'getPartners']);
    Route::post('/', [PartnerController::class, 'create']);
});
