<?php

use App\Http\Controllers\Api\V2\Commerce\AttributeController;
use App\Http\Controllers\Api\V2\Commerce\Order\OrderController;
use App\Http\Controllers\Api\V2\Commerce\ProductController;
use App\Http\Controllers\Api\V2\Commerce\SkuController;
use App\Http\Controllers\Api\V2\Commerce\StoreFront\StoreFrontController;
use Illuminate\Support\Facades\Route;






Route::prefix('products')->middleware('auth:merchant')->group(function () {
    Route::get('/', [ProductController::class, 'getProducts']);
    Route::get('/{product_id}', [ProductController::class, 'getProductById']);
    Route::post('/', [ProductController::class, 'create']);
    Route::patch('/{product_id}', [ProductController::class, 'update']);
        Route::prefix('sku')->group(function () {
            Route::post('/', [SkuController::class, 'create']);
    });
        Route::prefix('{product_id}/storefronts')->group(function () {
            Route::get('/', [ProductController::class, 'getStoreFrontByProductId']);
        });

});
Route::prefix('order')->middleware('auth:merchant')->group(function () {
    Route::get('/', [OrderController::class, 'getAllOrder']);
    Route::get('/{order_id}', [OrderController::class, 'getOrderById']);
    Route::post('/', [OrderController::class, 'createNewOrder']);
    Route::patch('/{order_id}', [OrderController::class, 'updateOrder']);
});
Route::prefix('store-fronts')->middleware('auth:merchant')->group(function () {
    Route::get('/', [StoreFrontController::class, 'getMerchantStorefronts']);
    Route::get('/{store_front_id}', [StoreFrontController::class, 'getStoreFrontsById']);
    Route::post('/', [StoreFrontController::class, 'create']);
    Route::post('/{store_front_id}', [StoreFrontController::class, 'update']);
        Route::prefix('{store_front_id}/products')->group(function () {
            Route::get('/', [StoreFrontController::class, 'getStoreFrontProducts']);
            Route::post('/add', [StoreFrontController::class, 'AddProductToStoreFront']);
        });
        Route::prefix('{store_front_id}/order')->group(function () {
            Route::get('/', [StoreFrontController::class, 'getStoreFrontsOrder']);
            Route::get('/{order_id}', [ProductController::class, 'getStorefrontOrderById']);
        });
});



