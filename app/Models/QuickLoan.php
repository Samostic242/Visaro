<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuickLoan extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'partner_id',
        'user_id',
        'payment_installment_id',
        'service_id',
        'merchant',
        'reference',
        'reason',
        'amount',
        'loan_amount',
        'industry',
        'currency',
        'calculated_interest',
        'per_instalment_amount',
        'utilized',
        'total_payable',
        'repayment_period',
        'status',
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function installment(): BelongsTo
    {
        return $this->belongsTo(PaymentInstallment::class);
    }

}
