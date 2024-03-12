<?php

namespace App\Models\Loans\Credits;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditInstallment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

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

    public function credit(): BelongsTo
    {
        return $this->belongsTo(Credit::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
