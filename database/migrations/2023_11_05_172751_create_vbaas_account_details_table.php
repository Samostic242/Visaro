<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVbaasAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vbaas_account_details', function (Blueprint $table) {
            $table->string('account_no', 200)->primary();
            $table->decimal('account_bal', 10, 2)->nullable();
            $table->string('account_id', 100)->nullable();
            $table->string('client', 100)->nullable();
            $table->string('client_id', 100)->nullable();
            $table->string('saving_product_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vbaas_account_details');
    }
}
