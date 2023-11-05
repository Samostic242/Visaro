<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->unsignedInteger('owners_id')->primary();
            $table->decimal('visaro_balance', 10, 2)->default(0.00);
            $table->decimal('visaro_credit', 10, 2)->default(0.00);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('status')->nullable()->comment("0 - Deactive, 1 - Active");
            
            $table->foreign('owners_id', 'owners_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet');
    }
}
