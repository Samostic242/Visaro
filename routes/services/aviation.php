<?php

use App\Http\Controllers\api\v1\Services\Aviation\FlightPaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\Services\Aviation\BookNewFlightController;
use App\Http\Controllers\api\v1\Users\Profile\Phone\PhoneNumberController;
use App\Http\Controllers\api\v1\Services\Aviation\TripsAuthorizationController;

Route::get('/widget/initialize', [TripsAuthorizationController::class, 'getWidgetAuthorizationToken'])->name('aviation.authorize');
Route::prefix('/flights')->group(function () {
    Route::prefix('/bookings')->group(function () {
        Route::get('/', [BookNewFlightController::class, 'fetchUserFlightBookings'])->name('aviation.flights.booking.fetch');
        Route::get('/{id}', [BookNewFlightController::class, 'fetchFlightBooking'])->name('aviation.flights.booking.find');
        Route::post('/submit', [BookNewFlightController::class, 'submitNewFlightBookingDataFromWidget'])->name('aviation.flights.booking.submit');
        Route::prefix('/{id}')->group(function () {
            Route::post('/confirm', [BookNewFlightController::class, 'confirmBooking'])->name('aviation.flights.booking.confirm');
            Route::prefix('/payments')->group(function () {
                Route::get('/options', [FlightPaymentController::class, 'fetchPaymentOptions'])->name('aviation.flights.payment.options');
                Route::get('/options/{option_id}', [FlightPaymentController::class, 'selectPaymentOption'])->name('aviation.flights.payment.select');
                Route::post('/confirm', [FlightPaymentController::class, 'confirmBookingPaymentTerms'])->name('aviation.flights.payment.confirm');
                Route::post('/complete', [FlightPaymentController::class, 'completePayment'])->name('aviation.flights.payment.complete');
            });
        });
    });
});
