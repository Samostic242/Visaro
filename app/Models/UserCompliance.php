<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserCompliance extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'public_id',
        'user_id',
        'kyc_id',
        'kyc_level',
        'bvn',
        'bvn_verified',
        'nin_verified',
        'nin',
        'verified_face',
        'verified_bank_account',
        'verified_card_details',
        'regulatory_id_type',
        'verified_regulatory_id',
        'verified_address',
        'meta_data',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
