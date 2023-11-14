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
        Schema::create('selected_flights', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('flight_booking_id');
            $table->string('reference_number')->nullable();
            $table->bigInteger('recomendation_id')->nullable();
            $table->bigInteger('combination_id')->nullable();
            $table->bigInteger('gds_id')->nullable();
            $table->bigInteger('agent_id')->nullable();
            $table->string('session')->nullable();
            $table->bigInteger('flight_route_index')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('selected_flights');
    }
};
