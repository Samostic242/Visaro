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
        Schema::create('currencies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('country_id');
            $table->uuid('public_id')->nullable();
            $table->string('country_code')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('name_plural')->nullable();
            $table->string('symbol')->nullable();
            $table->string('symbol_native')->nullable();
            $table->string('decimal_digits')->nullable();
            $table->string('rounding')->nullable();
            $table->json('meta')->nullable();
            $table->json('currency_object')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
