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
        Schema::create('merchant_preferences', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('merchant_id');
            $table->string('default_currency')->default('USD');
            $table->boolean('bank')->default(false);
            $table->boolean('card')->default(false);
            $table->boolean('qr')->default(false);
            $table->boolean('ussd')->default(false);
            $table->boolean('transfer')->default(false);
            $table->boolean('installment')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_preferences');
    }
};
