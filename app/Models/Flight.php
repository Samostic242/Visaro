<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'booked_flight_id',
        'flight_number',
        'type',
        'aircraft',

        'marketing_airline_name',
        'marketing_airline_code',
        'operating_airline_code',
        'operating_airline_name',

        'flight_class',
        'departure_date',
        'departure_airport_code',
        'departure_airport_name',
        'departure_airport_fullname',
        'departure_terminal',
        'departure_gate',
        'arrival_date',
        'arrival_airport_code',
        'arrival_airport_name',
        'arrival_airport_fullname',
        'arrival_terminal',
        'arrival_gate',
        'session',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
    public function flightBooking(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FlightBooking::class);
    }
    public function booking(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BookedFlight::class);
    }
}
