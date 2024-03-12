<?php

namespace App\Models;

use App\Models\Loans\Merchants\Merchant;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'owner_id',
        'owner',
        'reference',
        'amount',
        'balance',
        'narration',
        'title',
        'session',
        'status',
        'type',
        'entry',
        'fee',
        'destination',
        'amount',
        'public_id',
        'meta',
        'object',
        'channel',
        'mode',
        'beneficiary',
        'source',
        'transaction_date',
    ];

    protected $casts = [
        'meta' => 'array',
        'object' => 'array',
        'beneficiary' => 'array',
        'source' => 'array',
    ];

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class, 'owner_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
