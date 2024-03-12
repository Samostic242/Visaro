<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AirTraveller extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'flight_booking_id',
        'passenger_type_code',
        'name_prefix',
        'firstname',
        'lastname',
        'middlename',
        'gender',
        'email',
        'phone_number',
        'session',
        'number_of_bagages',
        'number_of_bagages1',
        'hand_luggages',
        'hand_luggages1',
        'amount_paid',
        'frequent_flyer_number',
        'frequent_flyer_airline',
        'birth_date',
        'birth_date_string',
        'gender_name',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
}
