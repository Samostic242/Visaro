<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booked_flights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id');
            $table->foreignUuid('flight_booking_id');
            $table->string('type')->default('domestic');
            $table->string('reference_number')->nullable();
            $table->string('booking_reference_id')->nullable();
            $table->string('booking_reference_type')->nullable();
            $table->string('ticket_time_limit')->nullable();
            $table->json('air_travelers')->nullable();
            $table->json('flight_sets')->nullable();
            $table->json('flight_rules')->nullable();
            $table->json('flight_rule_penalties')->nullable();
            $table->json('new_passenger_fares')->nullable();
            $table->string('session')->nullable();
            $table->json('errors')->nullable();
            $table->json('warnings')->nullable();

            $table->json('copy')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_flights');
    }
};
