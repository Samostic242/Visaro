<?php

namespace App\Models\Commerce;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'merchant_code'
    ];

    public function skus(): HasMany
    {
        return $this->hasMany(Sku::class);
    }

    public function storefronts(): BelongsToMany
    {
        return $this->belongsToMany(StoreFront::class, 'store_front_products', 'product_id', 'store_front_id');
    }



}
