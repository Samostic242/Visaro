<?php

namespace App\Models\Commerce;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeOptionSku extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'attribute_option_id',
        'sku_id',
    ];
}
