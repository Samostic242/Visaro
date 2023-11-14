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
        Schema::create('flight_bookings', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->nullable();
            $table->foreignId('user_id');
            $table->string('origin')->nullable();
            $table->string('mode')->nullable();
            $table->bigInteger('price')->default(0);
            $table->bigInteger('amount')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('type')->nullable();
            $table->string('hash')->nullable();
            $table->string('session')->nullable();
            $table->bigInteger('amount_paid')->default(0);
            $table->string('payment_type')->nullable();
            $table->string('ticket_type')->nullable();
            $table->string('promo_code')->nullable();
            $table->boolean('close_session_after_booking')->default(false);
            $table->string('status')->default('initiated');
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
        Schema::dropIfExists('flight_bookings');
    }
};
