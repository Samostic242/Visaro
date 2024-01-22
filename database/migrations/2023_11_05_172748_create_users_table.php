<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('public_id')->nullable();
            $table->string('firstname')->default('');
            $table->string('middlename')->default('');
            $table->string('lastname')->default('');
            $table->string('phone_country_code', 20)->nullable();
            $table->string('phone')->default('');
            $table->string('email')->unique('users_email_unique');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('pics')->default('no_pic.jpg');
            $table->string('password');
            $table->string('chng_password_logon')->default('0');
            $table->string('otp_code', 100)->nullable();
            $table->dateTime('otp_created_at')->nullable();
            $table->dateTime('otp_expiry_time')->nullable();
            $table->integer('otp_type')->nullable()->comment("1 - Login Validation, 2 - Forgot Password 3 - Phone Number Confirmation 4 - Pin Change");
            $table->integer('god_eye')->default(0);
            $table->integer('otp_login_verif')->default(0);
            $table->dateTime('otp_login_grace', 1)->nullable();
            $table->integer('otp_forgot_pass_verif')->default(0);
            $table->dateTime('otp_forgot_grace', 1)->nullable();
            $table->integer('otp_phone_verif')->default(0);
            $table->dateTime('otp_phone_grace', 1)->nullable();
            $table->unsignedTinyInteger('setup_trans_pin')->default(0);
            $table->integer('trans_pin_failed_trails')->default(0)->comment("Block Account on 4 Failed Attempts");
            $table->string('trans_pin')->nullable();
            $table->dateTime('otp_trans_pin_grace')->nullable();
            $table->boolean('otp_trans_pin_flag')->default(0);
            $table->integer('user_locked')->default(0)->comment("0 - Active, 1 - Locked");
            $table->integer('user_disabled')->default(0)->comment("0 - Active, 1 - Disabled");
            $table->integer('pin_missed')->default(0);
            $table->integer('password_missed')->default(0);
            $table->string('hint_question')->nullable();
            $table->string('hint_answer')->nullable();
            $table->integer('passchg_logon')->nullable();
            $table->string('vfd_account_no', 200)->nullable();
            $table->integer('vfd_loan_account_no')->nullable();
            $table->string('code')->nullable()->index();
            $table->string('qrcode')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
