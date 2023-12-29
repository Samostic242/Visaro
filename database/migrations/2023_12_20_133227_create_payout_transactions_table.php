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
        Schema::create('payout_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->foreignId('merchant_id')->nullable()->index();
            $table->foreignId('transaction_id')->nullable()->index();
            $table->string('session')->nullable()->index();
            $table->string('reference')->nullable()->index();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('message')->nullable();
            $table->string('currency')->default('NGN');
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('balance')->default(0);
            $table->string('narration')->nullable();
            $table->enum('entry', ['credit', 'debit'])->default('debit'); // credit or debit
            $table->bigInteger('fee')->default(0);
            $table->bigInteger('charge')->default(0);
            $table->string('status')->nullable(); // successful or failed or processing
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
        Schema::dropIfExists('payouts');
    }
};
