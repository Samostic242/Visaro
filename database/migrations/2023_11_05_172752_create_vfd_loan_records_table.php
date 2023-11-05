<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVfdLoanRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vfd_loan_records', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('vfd_acct_no', 200)->nullable();
            $table->string('vfd_loan_acct_no', 200)->nullable();
            $table->decimal('loan_amt', 10, 2)->nullable();
            $table->tinyInteger('sent_to_visaro_vfd_acct')->nullable();
            $table->dateTime('sent_date')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('status')->default(1)->comment("1 - Active, 2 -Deleted");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vfd_loan_records');
    }
}
