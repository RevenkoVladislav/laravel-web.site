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
        Schema::create('product_shop', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('price');

            $table->foreign('shop_id', 'shop_id_fk')->on('shops')->references('id');
            $table->foreign('product_id', 'product_id_fk')->on('products')->references('id');

            $table->unique(['shop_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_shop');
    }
};
