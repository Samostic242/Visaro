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
        Schema::create('user_cards', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('public_id')->index();
            $table->foreignUuid('user_id')->constrained();
            $table->string('last_four_digit')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->timestamp('last_charged')->nullable();
            $table->string('value')->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('card_type')->nullable();
            $table->string('exp_month')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('signature')->nullable();
            $table->boolean('allow_charge')->default(true);
            $table->json('metadata')->nullable();
            $table->string('status')->default('active');
            $table->string('token')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_cards');
    }
};
