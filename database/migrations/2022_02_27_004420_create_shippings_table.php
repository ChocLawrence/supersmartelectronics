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
        Schema::dropIfExists('shippings');
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('email');
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('zipcode');
            $table->timestamps();
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
        Schema::dropIfExists('shippings');
        Schema::enableForeignKeyConstraints();
    }
};
