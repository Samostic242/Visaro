<?php

namespace App\Models\Loans\Credits;

use App\Models\Loans\Creditor\Creditor;
use App\Models\Loans\Merchants\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'credit_id',
        'amount',
        'installment_number',
        'payable_at',
        'paid_at',
        'status',
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'meta' => 'array',
    ];

    public function request(): HasOne
    {
        return $this->hasOne(CreditRequest::class);
    }

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creditor(): BelongsTo
    {
        return $this->belongsTo(Creditor::class);
    }

}
