<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Token extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'token',
        'purpose',
        'recipient',
        'data',
        'verified_at',
        'valid',
        'public_id',
        'expires_at',
        'meta',
    ];

    protected $casts = [
        'valid' => 'boolean',
        'meta' => 'array',
    ];
}
