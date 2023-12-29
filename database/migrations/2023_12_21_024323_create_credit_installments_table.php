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

        Schema::create('credit_installments', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('credit_id')->nullable()->index();
            $table->bigInteger('amount')->default(0);
            $table->integer('installment_number')->default(1);
            $table->timestamp('payable_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->string('session')->nullable()->index();
            $table->string('reference')->nullable()->index();
            $table->bigInteger('fee')->default(0);
            $table->bigInteger('charge')->default(0);
            $table->string('status')->nullable();               // successful or failed or processing
            $table->string('mode')->nullable();
            $table->string('creditor_response')->nullable();
            $table->json('meta')->nullable();
            $table->json('request_object')->nullable();
            $table->json('response_object')->nullable();
            $table->dateTime('date')->nullable();
            $table->boolean('active')->default(true);
            $table->softdeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_installments');
    }
};
