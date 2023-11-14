<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightBillingAddress extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'contact_name',
        'contact_email',
        'contact_mobile_number',
        'address_line1',
        'address_line2',
        'session',
        'city',
        'country_code',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
}
