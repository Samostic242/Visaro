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
        Schema::create('payment_installments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id');
            $table->string('target_service');
            $table->foreignUuid('target_service_id');
            $table->foreignUuid('payment_option_id');
            $table->bigInteger('total_amount_payable')->default(0);
            $table->json('installments')->nullable();
            $table->bigInteger('number_of_installments')->default(0);
            $table->bigInteger('single_installment_amount')->default(0);
            $table->bigInteger('current_installment')->default(0);
            $table->dateTimeTz('first_payment_date')->nullable();
            $table->dateTimeTz('next_payment_date')->nullable();
            $table->dateTimeTz('due_payment_date')->nullable();
            $table->bigInteger('processing_fee_applied')->nullable()->default(1);
            $table->string('status')->default('initiated');
            $table->string('payment_source')->default('wallet');
            $table->string('session')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('completed')->default(false);

            $table->boolean('past_due')->default(false);
            $table->json('copy')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_installments');
    }
};
