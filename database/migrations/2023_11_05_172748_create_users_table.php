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
            $table->string('phone_code', 20)->nullable();
            $table->string('phone')->default('');
            $table->string('email')->unique('users_email_unique');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('photo')->default('no_pic.jpg');
            $table->string('password')->nullable();
            $table->string('hint_question')->nullable();
            $table->string('hint_answer')->nullable();
            $table->string('code')->nullable()->index();
            $table->string('qrcode')->nullable();
            $table->integer('otp_login_verif')->nullable();
            $table->integer('otp_phone_verif')->nullable();
            $table->integer('otp_type')->nullable();
            
            
            $table->string('status')->default('active');
            $table->boolean('active')->default(true);
            $table->json('meta')->nullable();
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
