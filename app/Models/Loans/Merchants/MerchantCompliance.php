<?php

namespace App\Models\Loans\Merchants;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantCompliance extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'business_name',
        'business_registration_number',
        'acronym',
        'website',
        'industry',
        'category',
        'country_id',
        'state',
        'lga',
        'address1',
        'address2',
        'description',
        'email',
        'phone_code',
        'phone',

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
