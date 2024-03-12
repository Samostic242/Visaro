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
        Schema::create('air_travellers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id');
            $table->foreignUuid('flight_booking_id');
            $table->string('passenger_type_code')->nullable();
            $table->string('name_prefix')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('session')->nullable();
            $table->integer('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('number_of_bagages')->nullable();
            $table->integer('number_of_bagages1')->nullable();
            $table->integer('hand_luggages')->nullable();
            $table->integer('hand_luggages1')->nullable();
            $table->bigInteger('amount_paid')->nullable();
            $table->string('frequent_flyer_number')->nullable();
            $table->string('frequent_flyer_airline')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_date_string')->nullable();
            $table->string('gender_name')->nullable();
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
        Schema::dropIfExists('air_travellers');
    }
};
