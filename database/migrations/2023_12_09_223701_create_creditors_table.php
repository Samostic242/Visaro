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
        Schema::create('creditors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('acronym')->nullable();
            $table->string('official_name')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('code')->nullable();
            $table->foreignUuid('country_id');
            $table->string('category')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('conflict_resolution_email')->nullable();
            $table->string('conflict_resolution_phone_code')->nullable();
            $table->string('conflict_resolution_phone')->nullable();
            $table->string('entity')->nullable();  // individual, institution
            $table->string('entity_category')->nullable(); // private, government, individual
            $table->json('customization')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('primary_creditor')->default(false);
            $table->timestamps();
            $table->softdeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditors');
    }
};
