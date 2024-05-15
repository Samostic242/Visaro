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
        Schema::create('user_securities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('user_id')->constrained();
            $table->string('pin')->nullable();
            $table->string('security_question')->nullable();
            $table->string('security_answer')->nullable();
            $table->boolean('set_pin')->default(false);
            $table->boolean('set_security_question')->default(false);
            $table->integer('invalid_pin_count')->default(0);
            $table->timestamp('next_available_trial')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_securities');
    }
};
