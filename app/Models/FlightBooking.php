<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightBooking extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

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

    public function installments(): BelongsTo
    {
        return $this->belongsTo(PaymentInstallment::class);
    }

    public function flights(): HasMany
    {
        return $this->hasMany(Flight::class);
    }
}
