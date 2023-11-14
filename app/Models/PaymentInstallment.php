<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentInstallment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'target_service',
        'target_service_id',
        'payment_option_id',
        'total_amount_payable',
        'installments',
        'number_of_installments',
        'single_installment_amount',
        'first_payment_date',
        'next_payment_date',
        'processing_fee_applied',
        'session',
        'status',
        'past_due',
        'meta',
    ];

    protected $casts = [
        'installments' => 'array',
        'copy' => 'array',
        'meta' => 'array',
    ];
}
