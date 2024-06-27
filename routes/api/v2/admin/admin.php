<?php

use App\Http\Controllers\Api\V2\Account\Services\BankingController;
use App\Http\Controllers\Api\V2\Admin\Auth\AuthController;
use App\Http\Controllers\Api\V2\Admin\Notification\NotificationController;
use App\Http\Controllers\Api\V2\Admin\Support\SupportController;
use App\Http\Controllers\Api\V2\Admin\User\UserController;
use Illuminate\Support\Facades\Route;





Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AuthController::class, 'fetchAdminUser']);
    Route::get('dashboard', [AuthController::class, 'fetchOverview']);
    Route::get('users', [UserController::class, 'getUserStatistics']);
    Route::get('get-all-admin', [AuthController::class, 'fetchAllAdmin']);
    Route::get('support', [SupportController::class, 'getAllSupport']);
    Route::post('create-admin', [AuthController::class, 'createAdminUser']);
    Route::post('send-notification', [NotificationController::class, 'sendNotification']);


});


