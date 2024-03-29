<?php

namespace App\Models\Commerce;

use App\Models\Merchant\Onboarding\Merchant;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreFront extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'merchant_id',
        'name',
        'logo',
        'cover_image',
        'status',

    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'store_front_products', 'store_front_id', 'product_id');
    }

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
