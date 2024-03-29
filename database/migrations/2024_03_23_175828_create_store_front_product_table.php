<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('store_front_products', function (Blueprint $table) {
            $table->foreignUuid('store_front_id');
            $table->foreignUuid('product_id');

            $table->primary(['store_front_id', 'product_id']);
            $table->foreign('product_id', 'user_roles_product_id_foreign')->references('id')->on('products')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('store_front_id', 'user_roles_store_front_id_foreign')->references('id')->on('store_fronts')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_front_product');
    }
};
