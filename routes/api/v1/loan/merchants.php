<?php

use App\Http\Controllers\api\v1\Loans\Invoice\InvoiceController;
use App\Http\Controllers\api\v1\Loans\Merchants\MerchantController;
use Illuminate\Support\Facades\Route;

Route::post('/', [MerchantController::class, 'createMerchantRecord']);
Route::get('/', [MerchantController::class, 'fetchMerchants']);
Route::get('/{merchant_id}', [MerchantController::class, 'fetchMerchant']);
Route::prefix('/{merchant_id}')->controller(MerchantController::class)->group(function () {
    Route::patch('/update', 'updateMerchantRecord');
    Route::delete('/delete', 'deleteMerchant');
    Route::get('/compliance', 'fetchMerchantCompliance');
    Route::get('/settings', 'fetchMerchantSettings');
    Route::patch('/compliance/update', 'updateMerchantCompliance');
    Route::patch('/settings/update', 'updateMerchantSettings');
});
Route::prefix('manage/invoices')->controller(InvoiceController::class)->group(function () {
    Route::post('/', 'createNewInvoice');
    Route::get('/', 'fetchAllInvoices');
    Route::get('/user', 'fetchUserActiveInvoices');
    Route::get('/{invoice_id}', 'fetchInvoice');
    Route::get('/code/{code}', 'fetchInvoiceByCode');
    Route::get('/number/{number}', 'fetchInvoiceByNumber');
    Route::patch('/{invoice_id}/update', 'updateInvoice');
    Route::delete('/{invoice_id}/delete', 'deleteInvoice');
});
