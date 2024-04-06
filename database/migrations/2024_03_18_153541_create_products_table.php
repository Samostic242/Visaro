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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->string('name')->nullable();
            $table->foreignUuid('merchant_id')->nullable();
            $table->string('merchant_code')->nullable();
            $table->string('code')->nullable();
            $table->string('slug')->nullable();
            $table->string('link')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('qrcode')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
