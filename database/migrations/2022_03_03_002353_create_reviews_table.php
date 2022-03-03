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
        Schema::dropIfExists('reviews');
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('rating');
            $table->text('comment');
            $table->bigInteger('order_item_id')->unsigned();
            $table->timestamps();
            $table->foreign('order_item_id')->references('id')->on('order_items')->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
        Schema::enableForeignKeyConstraints();
    }
};
