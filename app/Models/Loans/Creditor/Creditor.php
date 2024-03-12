<?php

namespace App\Models\Loans\Creditor;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Creditor extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

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
        'conflict_resolution_email',
        'conflict_resolution_phone_code',
        'conflict_resolution_phone',
        'entity', // individual, institution
        'entity_category', // private, government,individual
        'customization', // colors, images, etc
        'meta',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
        'style' => 'array',
        'meta' => 'array',
    ];

    public function conditions(): HasOne
    {
        return $this->hasOne(CreditorCondition::class);
    }
}
