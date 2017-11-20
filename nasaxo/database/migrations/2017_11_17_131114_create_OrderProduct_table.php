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
            $table->integer('ID_Order')->unsigned();
            $table->foreign('ID_Order')->references('id')->on('Order')->ondelete('cascade');
            $table->integer('ID_Product')->unsigned();
            $table->foreign('ID_Product')->references('id')->on('Product')->ondelete('cascade');
            $table->integer('ID_Size')->unsigned();
            $table->foreign('ID_Size')->references('id')->on('Size')->ondelete('cascade');
            $table->integer('ID_Color')->unsigned();
            $table->foreign('ID_Color')->references('id')->on('Color')->ondelete('cascade');
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
