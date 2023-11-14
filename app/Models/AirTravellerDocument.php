<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AirTravellerDocument extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'air_traveller_id',
        'doc_type',
        'inner_doc_type',
        'doc_id',
        'issue_country_code',
        'issue_location',
        'birth_country_code',
        'effective_date',
        'expiry_date',
        'birth_date',
        'session',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
}
