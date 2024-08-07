<?php

use App\Http\Controllers\Api\V1\Services\Aviation\BookNewFlightController;
use App\Http\Controllers\Api\V1\Services\Aviation\FlightPaymentController;
use App\Http\Controllers\Api\V1\Services\Aviation\TripsAuthorizationController;
use Illuminate\Support\Facades\Route;
Route::get('/fetch-balance', [TripsAuthorizationController::class, 'fetchBalance'])->name('fetch.balance');
Route::post('/test-recurrent', [TripsAuthorizationController::class, 'testRecurrent']);

Route::get('/widget/initialize', [TripsAuthorizationController::class, 'getWidgetAuthorizationToken'])->name('aviation.authorize');
Route::prefix('/flights')->group(function () {
    Route::post('/fetch-details', [TripsAuthorizationController::class, 'fetchFlightDetails'])->name('fetch.flight.details');
        Route::prefix('/bookings')->group(function () {
            Route::get('/', [BookNewFlightController::class, 'fetchUserFlightBookings'])->name('aviation.flights.booking.fetch');
            Route::get('/{id}', [BookNewFlightController::class, 'fetchFlightBooking'])->name('aviation.flights.booking.find');
            Route::post('book/{id}', [TripsAuthorizationController::class, 'bookFlight'])->name('aviation.flights.book');
            Route::post('/submit', [BookNewFlightController::class, 'submitNewFlightBookingDataFromWidget'])->name('aviation.flights.booking.submit');
            Route::post('/confirm', [BookNewFlightController::class, 'confirmBooking'])->name('aviation.flights.booking.confirm');
            Route::prefix('/payments')->group(function () {
                    Route::get('/options', [FlightPaymentController::class, 'fetchPaymentOptions'])->name('aviation.flights.payment.options');
                    Route::post('/selectoption', [FlightPaymentController::class, 'selectPaymentOption'])->name('aviation.flights.payment.select');
                    Route::post('/confirm', [FlightPaymentController::class, 'confirmBookingPaymentTerms'])->name('aviation.flights.payment.confirm');
                    Route::post('/complete', [FlightPaymentController::class, 'completePayment'])->name('aviation.flights.payment.complete');
                });

    });
});
