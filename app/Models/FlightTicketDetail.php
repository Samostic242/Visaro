<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightTicketDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

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
