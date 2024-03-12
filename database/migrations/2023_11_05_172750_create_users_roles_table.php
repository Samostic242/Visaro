<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->foreignUuid('user_id');
            $table->foreignUuid('role_id');
            $table->text('description');

            $table->primary(['user_id', 'role_id']);
            $table->foreign('role_id', 'users_roles_role_id_foreign')->references('id')->on('roles')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('user_id', 'users_roles_user_id_foreign')->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
