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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->foreignId('owner_id');
            $table->string('owner')->nullable();
            $table->string('type')->nullable();
            $table->string('number')->nullable();
            $table->string('expiration_month')->nullable();
            $table->string('expiration_year')->nullable();
            $table->string('cvv')->nullable();
            $table->string('last_four_digit')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('street_address')->nullable();
            $table->string('lga')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_logo')->nullable();
            $table->boolean('allow_charge')->default(true);
            $table->boolean('active')->default(true);
            $table->string('status')->default('active');
            $table->string('token')->nullable();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
