<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;


    protected $fillable = [
        'country_code',
        'name',
        'code',
        'name_plural',
        'symbol',
        'symbol_native',
        'decimal_digits',
        'rounding',
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'meta' => 'array',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
