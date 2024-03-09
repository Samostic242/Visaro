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
        Schema::create('merchants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->string('slug')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable(); // corporation, sole_proprietorship, partnership
            $table->string('business_email')->nullable();
            $table->string('business_phone_code')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->string('acronym')->nullable();
            $table->string('official_name')->nullable();
            $table->string('website')->nullable();
            $table->string('presence')->nullable(); // physical, virtual, hybrid
            $table->string('logo')->nullable();
            $table->foreignUuid('country_id');
            $table->string('category')->nullable();
            $table->json('meta')->nullable();
            $table->json('customization')->nullable();
            $table->string('code')->nullable()->index();
            $table->string('qrcode')->nullable();
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
        Schema::dropIfExists('merchants');
    }
};
