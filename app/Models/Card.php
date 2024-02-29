<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'token',
        'status',
        'active',
        'allow_charge',
        'provider_logo',
        'provider',
        'lga',
        'street_address',
        'city',
        'postal_code',
        'state',
        'country',
        'last_four_digit',
        'cvv',
        'expiration_year',
        'expiration_month',
        'number',
        'type',
        'owner',
        'owner_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongTo(User::class, 'owner_id');
    }
}
