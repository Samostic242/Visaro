<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lga extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $table = 'lga';
    protected $fillable = [
        'country_id',
        'state_id',
        'name',
        'code',
        'type',
        'longitude',
        'latitude',
        'active',
    ];
    protected $casts = [
        'meta' => 'array',
        'active' => 'boolean',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
