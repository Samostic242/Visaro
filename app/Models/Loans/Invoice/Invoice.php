<?php

namespace App\Models\Loans\Invoice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'active' => 'boolean',
        'items' => 'array',
        'meta' => 'array',
    ];
}
