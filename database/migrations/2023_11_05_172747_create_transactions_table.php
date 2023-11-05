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
            $table->string('visaro_unique_id', 200)->primary();
            $table->string('paystack_ref', 200)->nullable();
            $table->string('paystack_access_code')->nullable();
            $table->text('paystack_authorization_url')->nullable();
            $table->bigInteger('user_id');
            $table->string('trans_type', 10)->comment("01 - BVN, 02 - Transfer, 03 - Reversal, 04 - Credit");
            $table->decimal('amount', 10, 2);
            $table->decimal('processed_amt', 10, 0)->nullable();
            $table->unsignedInteger('status')->default(0)->comment("0 - Initializing, 1 - Success, 2 - Failed, 3 - Fruadulent");
            $table->string('paystack_status', 10)->nullable();
            $table->timestamps();
            $table->decimal('prev_wall_bal', 20, 2)->nullable();
            $table->decimal('curr_wall_bal', 20, 2)->nullable();
            $table->string('transfer_txnid')->nullable();
            $table->string('transfer_session_id')->nullable();
            $table->string('transfer_reference')->nullable();
            $table->string('transfer_server_status', 10)->nullable();
            $table->text('transfer_server_message')->nullable();
            $table->string('reversal_of', 200)->nullable();
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
