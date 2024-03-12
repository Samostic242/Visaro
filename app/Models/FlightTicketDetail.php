<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightTicketDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'price',
        'confirmation_code',
        'session',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
}
