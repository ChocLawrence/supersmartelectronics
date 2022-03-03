<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('order_items');
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->boolean('rstatus')->default(false);
            $table->longText('options')->nullable();
            $table->decimal('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('order_items');
        Schema::enableForeignKeyConstraints();
    }
};
