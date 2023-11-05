<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBnplServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnpl_services', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('bnpl_service_name', 200)->nullable();
            $table->text('thumbnails')->nullable();
            $table->text('display_img')->nullable();
            $table->timestamps();
            $table->bigInteger('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bnpl_services');
    }
}
