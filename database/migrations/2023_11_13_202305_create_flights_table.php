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
        Schema::create('flights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id');
            $table->foreignUuid('flight_booking_id');
            $table->foreignUuid('booked_flight_id');
            $table->string('type')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('aircraft')->nullable();
            $table->string('marketing_airline_name')->nullable();
            $table->string('marketing_airline_code')->nullable();
            $table->string('operating_airline_code')->nullable();
            $table->string('operating_airline_name')->nullable();
            $table->string('flight_class')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('departure_airport_code')->nullable();
            $table->string('departure_airport_name')->nullable();
            $table->string('departure_airport_fullname')->nullable();
            $table->string('departure_terminal')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('departure_gate')->nullable();
            $table->string('arrival_airport_code')->nullable();
            $table->string('arrival_airport_name')->nullable();
            $table->string('arrival_airport_fullname')->nullable();
            $table->string('arrival_terminal')->nullable();
            $table->string('arrival_gate')->nullable();
            $table->string('session')->nullable();

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
        Schema::dropIfExists('flights');
    }
};
