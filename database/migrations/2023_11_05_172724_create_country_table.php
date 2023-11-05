<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_key', 100);
            $table->uuid('public_id')->nullable();
            $table->string('name')->nullable();
            $table->string('capital')->nullable();
            $table->string('flag')->nullable();
            $table->string('flag_icon')->nullable();
            $table->string('continent')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('code')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('sub_region')->nullable();
            $table->json('timezones')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
}
