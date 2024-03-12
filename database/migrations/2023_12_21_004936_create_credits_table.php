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

        Schema::create('credits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id')->nullable()->index();
            $table->foreignUuid('creditor_id')->nullable()->index();
            $table->string('session')->nullable()->index();
            $table->string('reference')->nullable()->index();
            $table->string('currency')->default('NGN');
            $table->bigInteger('balance')->default(0);
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('fee')->default(0);
            $table->bigInteger('charge')->default(0);
            $table->string('status')->nullable(); // successful or failed or processing
            $table->enum('entry', ['credit', 'debit'])->default('debit'); // credit or debit
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
        Schema::dropIfExists('credits');
    }
};

