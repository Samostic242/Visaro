<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightBooking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'mode',
        'price',
        'amount',
        'confirmation_code',
        'origin',
        'type',
        'hash',
        'session',
        'amount_paid',
        'payment_type',
        'ticket_type',
        'promo_code',
        'close_session_after_booking',
        'status',
        'copy',
        'meta',
    ];

    protected $casts = [
        'copy' => 'array',
        'meta' => 'array',
    ];
    public function billingAddress(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FlightBillingAddress::class);
    }
    public function booked(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(BookedFlight::class);
    }
    public function travellers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AirTraveller::class);
    }
}
