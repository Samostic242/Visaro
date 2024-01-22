<?php

namespace App\Models\Loans\Merchants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'acronym',
        'official_name',
        'website',
        'logo',
        'code',
        'category',
        'country_id',
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

    public function compliance(): HasOne
    {
        return $this->hasOne(MerchantCompliance::class);
    }

    public function setting(): HasOne
    {
        return $this->hasOne(MerchantSetting::class);
    }
}
