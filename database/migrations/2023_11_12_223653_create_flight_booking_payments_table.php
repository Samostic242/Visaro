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
        Schema::create('flight_booking_payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('flight_booking_id');
            $table->foreignId('instalment_id');
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('amount_payable')->default(0);
            $table->bigInteger('balance')->default(0);
            $table->string('payment_option')->default('pay_now');
            $table->string('session')->nullable();
            $table->json('payment_option_copy')->nullable();
            $table->json('copy')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softdeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_booking_payments');
    }
};
