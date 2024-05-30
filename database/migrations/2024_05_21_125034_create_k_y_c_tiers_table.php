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
        Schema::create('k_y_c_tiers', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('public_id')->index();
            $table->string('tier_name')->nullable();
            $table->longText('tier_description')->nullable();
            $table->integer('level')->nullable();
            $table->decimal('transaction_limit', 15,2)->nullable();
            $table->decimal('credit_limit', 15,2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_y_c_tiers');
    }
};
