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
        Schema::create('merchant_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('merchant_id');
            $table->string('payout_interval')->default('daily');
            $table->integer('payout_frequency')->default(1);
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
        Schema::dropIfExists('merchant_settings');
    }
};
