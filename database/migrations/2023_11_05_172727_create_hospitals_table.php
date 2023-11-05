<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('hospital_name', 200)->nullable();
            $table->text('thumbnails')->nullable();
            $table->text('display_img')->nullable();
            $table->timestamps();
            $table->bigInteger('created_by')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('country_key', 100)->nullable();
            $table->integer('lga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
