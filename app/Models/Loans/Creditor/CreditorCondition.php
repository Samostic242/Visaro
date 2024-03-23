<?php

namespace App\Models\Loans\Creditor;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditorCondition extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'tier',
        'base_url',
        'connection_type',
        'payment_mode',
        'recovery_mode',
        'recovery_channel',
        'maximum_credit_installments',
        'minimum_credit_installments',
        'operating_account_code',
        'operating_account_number',
        'operating_account_id',
        'terms_and_conditions',
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'meta' => 'array',
    ];

    public function creditor(): BelongsTo
    {
        return $this->belongsTo(Creditor::class);
    }
}
