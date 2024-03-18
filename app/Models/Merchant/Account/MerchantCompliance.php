<?php

namespace App\Models\Merchant\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantCompliance extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'public_id',
        'merchant_id',
        'cac_number',
        'cac_document',
        'proof_of_address',
        'country_id',
        'local_government',
        'state',
        'city',
        'street_address',
        'land_mark',
        'meta'
    ];
   protected $cast = [
    'meta' => 'array'
   ];
}
