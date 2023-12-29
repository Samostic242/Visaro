<?php

namespace App\Models\Loans\Credits;

use App\Models\Loans\Creditor\Creditor;
use App\Models\Loans\Merchants\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'credit_request_id',
        'user_id',
        'creditor_id',
        'currency',
        'balance',
        'amount_requested',
        'amount_approved',
        'amount',
        'fee',
        'charge',
        'status',
        'session',
        'reference',
        'creditor_response',
        'meta',
        'request_object',
        'response_object',
    ];

    protected $casts = [
        'meta' => 'array',
        'request_object' => 'array',
        'response_object' => 'array',
    ];

    public function installments(): HasMany
    {
        return $this->hasMany(CreditInstallment::class);
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

    public function request(): BelongsTo
    {
        return $this->belongsTo(CreditRequest::class);
    }

}
