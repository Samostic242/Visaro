<?php

namespace App\Models\Loans\Merchants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantSetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'payout_interval',
        'payout_frequency',
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'meta' => 'array',
    ];

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }
}
