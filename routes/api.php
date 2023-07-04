<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PassportController;

Route::prefix('v1')->group(function () {
    Route::post('register', [PassportController::class, 'register']);
    Route::post('login', [PassportController::class, 'login']);
    Route::get('/region_list/{country_key}', [App\Http\Controllers\api\v1\MessageController::class, 'region_list'])->name('region_list');
    Route::get('/country_list', [App\Http\Controllers\api\v1\MessageController::class, 'country_list'])->name('country_list');

    Route::post('/forgotpassword', [App\Http\Controllers\api\v1\MessageController::class, 'forgotpassword'])->name('forgotpassword');
    Route::get('/list_otp_types', [App\Http\Controllers\api\v1\MessageController::class, 'list_otp_types'])->name('list_otp_types');


    // put all api protected routes here
    Route::middleware('auth:api')->group(function () {
       // Route::post('user-detail', [PassportController::class, 'userDetail']);
        Route::post('logout', [PassportController::class, 'logout']);

        Route::post('/validate_otp', [App\Http\Controllers\api\v1\MessageController::class, 'validate_otp'])->name('validate_otp');

        Route::get('/resend_otp/{otp_type}', [App\Http\Controllers\api\v1\MessageController::class, 'resend_otp'])->name('resend_otp');
        Route::post('/create_password', [App\Http\Controllers\api\v1\MessageController::class, 'create_password'])->name('create_password');
        Route::post('/profile_update', [App\Http\Controllers\api\v1\MessageController::class, 'profile_update'])->name('profile_update');
        Route::post('/company_profile_update', [App\Http\Controllers\api\v1\MessageController::class, 'company_profile_update'])->name('company_profile_update');


        Route::post('/initialize_transaction', [App\Http\Controllers\api\v1\TransactionController::class, 'initialize_transaction'])->name('initialize_transaction');
        Route::post('/verify_transaction', [App\Http\Controllers\api\v1\TransactionController::class, 'verify_transaction'])->name('verify_transaction');

        Route::post('/bvn_verification', [App\Http\Controllers\api\v1\TransactionController::class, 'bvn_verification'])->name('bvn_verification');



        Route::apiResource('articles',App\Http\Controllers\api\v1\ArticleController::class);

        Route::get('/articles/{id}/comments', [App\Http\Controllers\api\v1\ArticleController::class, 'show_comments'])->name('show_comment');
        Route::post('/articles/{id}/comments', [App\Http\Controllers\api\v1\ArticleController::class, 'store_comments'])->name('store_comments');

        Route::get('/articles/{id}/likes', [App\Http\Controllers\api\v1\ArticleController::class, 'show_likes'])->name('show_likes');
        Route::get('/articles/{id}/views', [App\Http\Controllers\api\v1\ArticleController::class, 'show_views'])->name('show_view');

        Route::put('/articles/{id}/likes', [App\Http\Controllers\api\v1\ArticleController::class, 'like_article'])->name('like_article');
        Route::put('/articles/{id}/views', [App\Http\Controllers\api\v1\ArticleController::class, 'view_article'])->name('view_a_article');

    });
});
