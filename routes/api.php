<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PassportController;
use App\Http\Controllers\api\v1\Users\Profile\Phone\PhoneNumberController;

Route::prefix('v1')->group(function () {
    Route::post('register', [PassportController::class, 'register']);
    Route::post('login', [PassportController::class, 'login']);

    // Refresh Token Route
    Route::post('/refresh-token', [PassportController::class, 'refreshToken'])->name('refresh-token');

    Route::get('/region_list/{country_key}', [App\Http\Controllers\api\v1\MessageController::class, 'region_list'])->name('region_list');
    Route::get('/country_list', [App\Http\Controllers\api\v1\MessageController::class, 'country_list'])->name('country_list');

    Route::post('/forgotpassword', [App\Http\Controllers\api\v1\MessageController::class, 'forgotpassword'])->name('forgotpassword');
    Route::get('/list_otp_types', [App\Http\Controllers\api\v1\MessageController::class, 'list_otp_types'])->name('list_otp_types');



    Route::middleware('auth:api')->group(function () {
        // Route::post('user-detail', [PassportController::class, 'userDetail']);
        Route::post('logout', [PassportController::class, 'logout']);
        Route::post('/validate_otp', [App\Http\Controllers\api\v1\MessageController::class, 'validate_otp'])->name('validate_otp');
        Route::get('/resend_otp/{otp_type}', [App\Http\Controllers\api\v1\MessageController::class, 'resend_otp'])->name('resend_otp');
        Route::post('/create_password', [App\Http\Controllers\api\v1\MessageController::class, 'create_password'])->name('create_password');


        Route::group(['middleware' => 'checkUserStatus'], function () {
            // Routes that require user status to be 1
            // Add your routes here...
            Route::post('/initialize_transaction', [App\Http\Controllers\api\v1\TransactionController::class, 'initialize_transaction'])->name('initialize_transaction');
            Route::get('/verify_transaction/{ref}', [App\Http\Controllers\api\v1\TransactionController::class, 'verify_transaction'])->name('verify_transaction');

            Route::post('/initialize_change_password', [App\Http\Controllers\api\v1\MessageController::class, 'initialize_change_password'])->name('initialize_change_transaction_pin');

            Route::post('/bvn_verification', [App\Http\Controllers\api\v1\TransactionController::class, 'bvn_verification'])->name('bvn_verification');

            Route::get('/dashboard', [App\Http\Controllers\api\v1\MessageController::class, 'dashboard'])->name('dashboard');
            Route::get('/profile_details', [App\Http\Controllers\api\v1\MessageController::class, 'profile_details'])->name('profile_details');

            Route::get('/balance_enquiry', [App\Http\Controllers\api\v1\MessageController::class, 'balance_enquiry'])->name('balance_enquiry');
            Route::get('/get_bank_list', [App\Http\Controllers\api\v1\MessageController::class, 'get_bank_list'])->name('get_bank_list');
            Route::get('/get_bill_payment_category', [App\Http\Controllers\api\v1\MessageController::class, 'get_bill_payment_category'])->name('get_bill_payment_category');

            Route::group(['middleware' => 'onBoardingCheck'], function () {
                Route::post('/initialize_change_transaction_pin', [App\Http\Controllers\api\v1\MessageController::class, 'initialize_change_transaction_pin'])->name('initialize_change_transaction_pin');
                Route::get('/username_check/{email}', [App\Http\Controllers\api\v1\MessageController::class, 'username_check'])->name('username_check');
                Route::post('/create_transaction_pin', [App\Http\Controllers\api\v1\MessageController::class, 'create_transaction_pin'])->name('create_transaction_pin');
                Route::get('/beneficial_enquiry', [App\Http\Controllers\api\v1\MessageController::class, 'beneficial_enquiry'])->name('beneficial_enquiry');
                Route::post('/transfer', [App\Http\Controllers\api\v1\MessageController::class, 'transfer'])->name('transfer');
                Route::post('/transfer_to_visaro', [App\Http\Controllers\api\v1\MessageController::class, 'transfer_to_visaro'])->name('transfer_to_visaro');

                Route::post('/company_profile_update', [App\Http\Controllers\api\v1\MessageController::class, 'company_profile_update'])->name('company_profile_update');
                Route::post('/profile_update', [PassportController::class, 'profile_update'])->name('profile_update');
            });
        });

        Route::apiResource('articles', App\Http\Controllers\api\v1\ArticleController::class);
        Route::get('/articles/{id}/comments', [App\Http\Controllers\api\v1\ArticleController::class, 'show_comments'])->name('show_comment');
        Route::post('/articles/{id}/comments', [App\Http\Controllers\api\v1\ArticleController::class, 'store_comments'])->name('store_comments');

        Route::get('/articles/{id}/likes', [App\Http\Controllers\api\v1\ArticleController::class, 'show_likes'])->name('show_likes');
        Route::get('/articles/{id}/views', [App\Http\Controllers\api\v1\ArticleController::class, 'show_views'])->name('show_view');

        Route::put('/articles/{id}/likes', [App\Http\Controllers\api\v1\ArticleController::class, 'like_article'])->name('like_article');
        Route::put('/articles/{id}/views', [App\Http\Controllers\api\v1\ArticleController::class, 'view_article'])->name('view_a_article');

        Route::group(['middleware' => 'checkUserStatus'], function () {
            // Routes that require user status to be 1
            // Add your routes here...
            Route::post('/initialize_transaction', [App\Http\Controllers\api\v1\TransactionController::class, 'initialize_transaction'])->name('initialize_transaction');
            Route::get('/verify_transaction/{ref}', [App\Http\Controllers\api\v1\TransactionController::class, 'verify_transaction'])->name('verify_transaction');

            Route::post('/initialize_change_password', [App\Http\Controllers\api\v1\MessageController::class, 'initialize_change_password'])->name('initialize_change_transaction_pin');

            Route::post('/bvn_verification', [App\Http\Controllers\api\v1\TransactionController::class, 'bvn_verification'])->name('bvn_verification');

            Route::get('/dashboard', [App\Http\Controllers\api\v1\MessageController::class, 'dashboard'])->name('dashboard');
            Route::get('/profile_details', [App\Http\Controllers\api\v1\MessageController::class, 'profile_details'])->name('profile_details');

            Route::get('/balance_enquiry', [App\Http\Controllers\api\v1\MessageController::class, 'balance_enquiry'])->name('balance_enquiry');
            Route::get('/get_bank_list', [App\Http\Controllers\api\v1\MessageController::class, 'get_bank_list'])->name('get_bank_list');
            Route::get('/get_bill_payment_category', [App\Http\Controllers\api\v1\MessageController::class, 'get_bill_payment_category'])->name('get_bill_payment_category');


            Route::prefix('/profile')->group(function () {
                Route::prefix('/phone')->group(function () {
                    Route::post('/verification/initiate', [PhoneNumberController::class, 'initiateVerifyUserPhoneNumber'])->name('phone.verification.initiate');
                    Route::post('/verification/complete', [PhoneNumberController::class, 'completeVerifyUserPhoneNumber'])->name('phone.verification.complete');
                });
            });
        });
    });
});
