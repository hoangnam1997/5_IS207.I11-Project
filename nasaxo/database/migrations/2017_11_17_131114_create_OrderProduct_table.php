<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderProduct', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->integer('ID_Order');
            $table->foreign('ID_Order')->references('id')->on('Order');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
            $table->integer('ID_Size');
            $table->foreign('ID_Size')->references('id')->on('Size');
            $table->integer('ID_Color');
            $table->foreign('ID_Color')->references('id')->on('Color');
            $table->integer('Count');
            $table->string('Description');
            $table->boolean('IsDelete');
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
        Schema::dropIfExists('OrderProduct');
    }
}
