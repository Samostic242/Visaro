<?php

namespace App\Models\Loans\Transactions;

use App\Models\Loans\Merchants\Merchant;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayoutTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'merchant_id',
        'account_number',
        'account_name',
        'bank_code',
        'bank_name',
        'currency',
        'balance',
        'amount',
        'entry',
        'fee',
        'status',
        'meta',
        'transfer_object',
        'transfer_response',
    ];

    protected $casts = [
        'meta' => 'array',
        'transfer_object' => 'array',
        'transfer_response' => 'array',
    ];

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }
}
