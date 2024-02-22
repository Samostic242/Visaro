<?php

use App\Http\Controllers\api\V2\Newsletter\NewsletterController;
use Illuminate\Support\Facades\Route;




Route::prefix('subscribe')->group(function (){
    Route::post('/', [NewsletterController::class,  'subscribe']);
});
