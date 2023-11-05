<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigInteger('user_id')->primary();
            $table->integer('account_type')->nullable()->comment("1 - Personal Account, 2 - Company");
            $table->string('c_name', 200)->nullable();
            $table->string('c_no', 200)->nullable();
            $table->string('c_expiry_date', 0)->nullable();
            $table->string('c_cvv', 20)->nullable();
            $table->text('bvn')->nullable();
            $table->integer('bvn_verified')->default(0)->comment("0 - Not Verified, 1 - Verified");
            $table->dateTime('bvn_verified_at')->nullable();
            $table->string('business_name', 200)->nullable();
            $table->text('business_address')->nullable();
            $table->string('business_region', 100)->nullable();
            $table->string('business_country', 100)->nullable();
            $table->string('business_email', 200)->nullable();
            $table->string('business_acc_no', 200)->nullable();
            $table->timestamps();
            $table->bigInteger('created_by')->nullable();
            $table->string('bvn_title', 50)->nullable();
            $table->string('bvn_first_name', 200)->nullable();
            $table->string('bvn_middle_name', 200)->nullable();
            $table->string('bvn_last_name', 200)->nullable();
            $table->string('bvn_gender', 20)->nullable();
            $table->string('bvn_marital_status', 20)->nullable();
            $table->dateTime('bvn_date_of_birth')->nullable();
            $table->string('bvn_phone_number_1', 200)->nullable();
            $table->string('bvn_phone_number_2', 200)->nullable();
            $table->string('bvn_email', 200)->nullable();
            $table->string('bvn_nationality', 200)->nullable();
            $table->text('bvn_residential_address')->nullable();
            $table->string('bvn_state_of_origin', 50)->nullable();
            $table->string('bvn_lga_of_origin', 50)->nullable();
            $table->string('bvn_state_of_residence', 50)->nullable();
            $table->string('bvn_lga_of_residence', 10)->nullable();
            $table->text('bvn_nin')->nullable();
            $table->dateTime('bvn_reg_date')->nullable();
            $table->string('bvn_enroll_bank_code', 50)->nullable();
            $table->string('bvn_enroll_branch', 200)->nullable();
            $table->string('bvn_name_on_card', 200)->nullable();
            $table->string('bvn_pics_file_name')->nullable();
            $table->string('profile_pics_file_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
