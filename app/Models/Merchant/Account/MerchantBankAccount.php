<?php

namespace App\Models\Merchant\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantBankAccount extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        "bank_name",
        "bank_code",
        "account_name",
        "account_number",
        "currency",
        "active",
        "status"
    ];
}
