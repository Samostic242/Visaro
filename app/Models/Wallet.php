<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Wallet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'status',
        'active',
        'ledger_id',
        'ledger_balance',
        'balance',
        'provider_id',
        'owner',
        'owner_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ledger(): BelongTo
    {
        return $this->belongsTo(Ledger::class);
    }
}
