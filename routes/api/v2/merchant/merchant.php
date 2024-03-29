<?php


use App\Http\Controllers\Api\V2\Merchant\Account\Compliance\ComplianceController;
use App\Http\Controllers\Api\V2\Merchant\Account\Settings\SettingsController;
use App\Http\Controllers\Api\V2\Merchant\Onboarding\Registration\MerchantRegistrationController;
use App\Http\Controllers\Api\V2\Merchant\Onboarding\Verification\MerchantVerificationController;
use Illuminate\Support\Facades\Route;






Route::prefix('onboarding')->group(function () {
    Route::post('email', [MerchantRegistrationController::class, 'getMerchantOtp']);
        Route::prefix('verifications')->group(function () {
            Route::post('verify-email-otp', [MerchantVerificationController::class, 'verifyMerchantOtp']);
    });
});

Route::prefix('compliance')->middleware('auth:merchant')->group(function () {
    Route::post('create', [ComplianceController::class, 'create']);
    Route::put('update', [ComplianceController::class, 'update']);
});

Route::prefix('settings')->middleware('auth:merchant')->group(function () {
    Route::post('create', [SettingsController::class, 'create']);
    Route::post('update', [SettingsController::class, 'update']);
});

Route::prefix('preference')->middleware('auth:merchant')->group(function () {
    Route::post('create', [SettingsController::class, 'createPreference']);
    Route::post('update', [SettingsController::class, 'updatePreference']);
});

Route::prefix('bank')->middleware('auth:merchant')->group(function () {
    Route::post('create', [SettingsController::class, 'createBankAccount']);
    Route::post('update', [SettingsController::class, 'updateBankAccount']);
});
