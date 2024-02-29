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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->foreignId('owner_id');
            $table->string('owner');
            $table->string('provider_id');
            $table->integer('balance')->default(0);
            $table->integer('ledger_balance')->default(0);
            $table->foreignId('ledger_id');
            $table->boolean('active')->default(true);
            $table->string('status')->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
