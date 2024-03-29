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
        Schema::create('store_fronts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->foreignUuid('merchant_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('qrcode')->nullable();
            $table->string('link')->nullable();
            $table->string('code')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('status')->default('active');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_fronts');
    }
};
