<?php

namespace App\Models\Commerce;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'transaction_id',
        'merchant_id',
        'user_id',
        'satisfied_at',
        'number',
        'status',
        'active'
    ];

    public function storefront(): BelongsTo
    {
        return $this->belongsTo(StoreFront::class);
    }

}
