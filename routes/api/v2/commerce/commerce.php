<?php

use App\Http\Controllers\api\V2\Commerce\AttributeController;
use App\Http\Controllers\api\V2\Commerce\ProductController;
use App\Http\Controllers\api\V2\Commerce\SkuController;
use Illuminate\Support\Facades\Route;




Route::prefix('product')->group(function () {
    Route::post('create', [ProductController::class, 'create']);
    Route::post('update/{product_id}', [ProductController::class, 'update']);
});
Route::prefix('attribute')->group(function () {
    Route::post('create', [AttributeController::class, 'create']);
    Route::post('update/{attribute_id}', [AttributeController::class, 'update']);
});
Route::prefix('sku')->group(function () {
    Route::post('create', [SkuController::class, 'create']);
    Route::post('update/{sku_id}', [SkuController::class, 'update']);
});
