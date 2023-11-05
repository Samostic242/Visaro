<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'country_id',
        'name',
        'code',
        'type',
        'longitude',
        'latitude',
        'active',
        'meta',
    ];
    protected $casts = [
        'meta' => 'array',
        'active' => 'boolean',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
