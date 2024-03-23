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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id')->nullable()->index();
            $table->foreignUuid('merchant_id')->nullable()->index();
            $table->string('slug')->nullable();
            $table->string('code')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->string('number')->nullable()->index();
            $table->string('session')->nullable()->index();
            $table->string('reference')->nullable()->index();
            $table->string('qrcode')->nullable()->index();
            $table->string('link')->nullable()->index();
            $table->string('currency')->default('NGN');
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('vat')->default(0);
            $table->bigInteger('tax')->default(0);
            $table->bigInteger('total_amount')->default(0);
            $table->longText('terms_and_conditions')->nullable();
            $table->json('items')->nullable();
            $table->string('mode')->nullable();
            $table->json('meta')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
