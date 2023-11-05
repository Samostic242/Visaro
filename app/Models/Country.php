<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'country';
    protected $fillable = [
        'name',
        'official_name',
        'capital',
        'flag_icon',
        'flag',
        'code',
        'continent',
        'phone_code',
        'longitude',
        'latitude',
        'sub_region',
        'timezones',
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'meta' => 'array',
    ];
}
