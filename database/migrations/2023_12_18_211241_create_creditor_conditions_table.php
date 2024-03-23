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
        Schema::create('creditor_conditions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('creditor_id');
            $table->integer('tier')->default(3);
            $table->string('base_url')->nullable();
            $table->string('callback_url')->nullable();
            $table->string('connection_type')->nullable(); // full, half
            $table->string('payment_mode')->nullable(); // direct, indirect
            $table->string('recovery_mode')->nullable(); // direct, indirect
            $table->string('recovery_channel')->nullable();
            $table->integer('maximum_credit_installments')->default(3);
            $table->integer('minimum_credit_installments')->default(1);
            $table->string('operating_account_number')->nullable();
            $table->string('operating_account_id')->nullable();
            $table->string('conflict_resolution_email')->nullable();
            $table->longText('terms_and_conditions')->nullable();
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
        Schema::dropIfExists('creditor_conditions');
    }
};
