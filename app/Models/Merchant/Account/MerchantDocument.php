<?php

namespace App\Models\Merchant\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MerchantDocument extends Model
{
    use HasFactory;
    use HasUuids;


    protected $fillable = [
        'compliance_id',
        'public_id',
        'url',
        'file_type',
        'file_size',
        'file_name',
        'purpose',
        'status',
    ];

}
