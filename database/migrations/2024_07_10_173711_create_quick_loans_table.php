<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quick_loans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->foreignUuid('partner_id')->constrained();
            $table->foreignUuid('user_id')->constrained();
            $table->foreignUuid('service_id');
            $table->string('merchant')->nullable();
            $table->string('amount')->nullable();
            $table->string('loan_amount')->nullable();
            $table->string('total_payable')->nullable();
            $table->string('repayment_period')->nullable();
            $table->string('industry')->nullable();
            $table->string('currency')->default('NGN');
            $table->string('status')->default('pending');
            $table->boolean('utilized')->default(false);
            $table->softDeletes();
            $table->index(['partner_id', 'user_id', 'service_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quick_loans');
    }
};
