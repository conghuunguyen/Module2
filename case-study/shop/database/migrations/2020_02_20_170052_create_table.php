<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_magane', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_quantity');
            $table->string('product_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_magane');
    }
}
