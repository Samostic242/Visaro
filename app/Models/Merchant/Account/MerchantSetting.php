<?php

namespace App\Models\Merchant\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantSetting extends Model
{
    use HasFactory;
    use HasUuids;


    protected $fillable = [
        "dispute_email",
        "general_email",
        "support_email"
    ];
}
