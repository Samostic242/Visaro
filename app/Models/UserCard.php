<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCard extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'last_four_digit',
        'transaction_reference',
        'last_charged',
        'value',
        'nickname',
        'authorization_code',
        'card_type',
        'exp_month',
        'exp_year',
        'signature',
        'allow_charge',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

