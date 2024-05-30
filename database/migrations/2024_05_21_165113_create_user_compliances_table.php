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
        Schema::create('user_compliances', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('public_id')->index();
            $table->foreignUuid('user_id')->constrained();
            $table->foreignUuid('kyc_id');
            $table->string('kyc_level')->nullable();
            $table->string('bvn')->nullable();
            $table->boolean('bvn_verified')->default(false);
            $table->string('nin')->nullable();
            $table->boolean('nin_verified')->default(false);
            $table->boolean('verified_face')->default(false);
            $table->boolean('verified_bank_account')->default(false);
            $table->boolean('verified_card_details')->default(false);
            $table->string('regulatory_id_type')->nullable();
            $table->boolean('verified_regulatory_id')->default(false);
            $table->boolean('verified_address')->default(false);
            $table->json('meta_data')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_compliances');
    }
};
