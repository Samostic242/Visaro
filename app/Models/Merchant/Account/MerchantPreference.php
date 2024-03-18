<?php

namespace App\Models\Merchant\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantPreference extends Model
{
    use HasFactory;
    use HasUuids;


    protected $fillable = [
        "default_currency",
        "bank",
        "card",
        "qr",
        "ussd",
        "transfer",
        "installment",
    ];

}
