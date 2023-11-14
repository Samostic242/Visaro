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
        Schema::create('air_traveller_documents', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('flight_booking_id');
            $table->foreignId('air_traveller_id');
            $table->string('doc_type')->nullable();
            $table->string('inner_doc_type')->nullable();
            $table->string('doc_id')->nullable();
            $table->string('issue_country_code')->nullable();
            $table->string('issue_location')->nullable();
            $table->string('session')->nullable();
            $table->string('birth_country_code')->nullable();
            $table->string('effective_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('birth_date')->nullable();
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
        Schema::dropIfExists('air_traveller_documents');
    }
};
