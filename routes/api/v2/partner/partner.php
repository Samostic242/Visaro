<?php

use App\Http\Controllers\Api\V2\Partner\PartnerController;
use Illuminate\Support\Facades\Route;



Route::prefix('auth')->group(function () {
    Route::post('login', [PartnerController::class, 'login']);
});

