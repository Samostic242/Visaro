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
        Schema::create('user_transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->foreignUuid('user_id')->constrained();
            $table->string('amount')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->string('reference')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('currency')->nullable();
            $table->string('api_status')->nullable();
            $table->string('authorization_code')->nullable();
            $table->json('metadata')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_transactions');
    }
};
