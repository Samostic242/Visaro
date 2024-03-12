<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookedFlight extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'type',
        'reference_number',
        'booking_reference_id',
        'booking_reference_type',
        'ticket_time_limit',
        'air_travelers',
        'flight_sets',
        'flight_rules',
        'flight_rule_penalties',
        'new_passenger_fares',
        'session',
        'errors',
        'warnings',
        'copy',
        'meta',
    ];

    protected $casts = [
        'air_travelers' => 'array',
        'flight_sets' => 'array',
        'flight_rules' => 'array',
        'flight_rule_penalties' => 'array',
        'new_passenger_fares' => 'array',
        'errors' => 'array',
        'warnings' => 'array',
        'copy' => 'array',
        'meta' => 'array',
    ];

    public function booking(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FlightBooking::class);
    }
}
