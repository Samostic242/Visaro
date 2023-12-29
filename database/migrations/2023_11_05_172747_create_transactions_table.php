<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->index();
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('balance')->default(0);
            $table->bigInteger('fee')->default(0);
            $table->bigInteger('charge')->default(0);
            $table->string('reference')->nullable()->index();
            $table->string('session')->nullable()->index();
            $table->string('narration')->nullable();
            $table->string('title')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();               // successful or failed or processing or initiated or abandoned
            $table->string('source_model')->nullable();         // which model is it coming from
            $table->string('source_table')->nullable();         // which table is it coming from
            $table->string('currency')->default('NGN');
            $table->enum('entry', ['credit', 'debit'])->default('credit'); // credit or debit
            $table->string('destination')->nullable();
            $table->string('channel')->nullable()->default('web');
            $table->string('type')->nullable();
            $table->string('mode')->nullable();
            $table->json('beneficiary')->nullable();
            $table->json('source')->nullable();
            $table->json('meta')->nullable();
            $table->json('object')->nullable();
            $table->dateTime('transaction_date')->nullable();
            $table->morphs('transactable');
            $table->softdeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
