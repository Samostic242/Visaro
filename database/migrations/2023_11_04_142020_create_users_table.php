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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username')->nullable();
            $table->string('phone_code', 20)->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique('users_email_unique');
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('photo')->default('no_pic.jpg');
            $table->string('password')->nullable();
            $table->string('hint_question')->nullable();
            $table->string('hint_answer')->nullable();
            $table->string('code')->nullable()->index();
            $table->string('qrcode')->nullable();
            $table->boolean('bvn_verified')->default(false);
            $table->json('bvn_verification_data')->nullable();
            $table->string('bvn')->nullable();
            $table->string('status')->default('active');
            $table->boolean('active')->default(true);
            $table->json('meta')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
