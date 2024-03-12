<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ledger extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'active',
        'balance',
    ];

    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }
}