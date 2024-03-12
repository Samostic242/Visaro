<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AirTravellerAddress extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'air_traveller_id',
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
