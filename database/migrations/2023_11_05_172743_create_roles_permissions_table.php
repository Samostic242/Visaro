<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->foreignUuid('role_id');
            $table->foreignUuid('permission_id');

            $table->primary(['role_id', 'permission_id']);
            $table->foreign('permission_id', 'roles_permissions_permission_id_foreign')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('role_id', 'roles_permissions_role_id_foreign')->references('id')->on('roles')->onDelete('cascade')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
