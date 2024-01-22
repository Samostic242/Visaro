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
        Schema::create('credit_requests', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('creditor_id')->nullable()->index();
            $table->foreignId('invoice_id')->nullable()->index();
            $table->string('session')->nullable()->index();
            $table->string('reference')->nullable()->index();
            $table->string('currency')->default('NGN');
            $table->bigInteger('amount')->default(0);
            $table->integer('number_of_installments')->default(1);
            $table->bigInteger('amount_payable')->default(0);
            $table->bigInteger('fee')->default(0);
            $table->bigInteger('charge')->default(0);
            $table->string('status')->nullable(); // successful or failed or processing
            $table->string('creditor_response')->nullable();
            $table->string('mode')->nullable();
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
        Schema::dropIfExists('credit_requests');
    }
};
