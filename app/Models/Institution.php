<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
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
}
