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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->string('code')->nullable();
            $table->foreignUuid('invoice_id')->nullable();
            $table->foreignUuid('transaction_id')->nullable();
            $table->foreignUuid('merchant_id')->nullable();
            $table->foreignUuid('user_id')->nullable();
            $table->timestamp('satisfied_at')->nullable();
            $table->string('qrcode')->nullable();
            $table->integer('number')->nullable();
            $table->string('status')->default('active');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
