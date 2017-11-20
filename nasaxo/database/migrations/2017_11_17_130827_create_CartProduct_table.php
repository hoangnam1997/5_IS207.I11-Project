<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CartProduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ID_Product')->unsigned();
            $table->foreign('ID_Product')->references('id')->on('Product')->onDelete('cascade');
            $table->date('CreateDate');
            $table->integer('Count');
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
        Schema::dropIfExists('CartProduct');
    }
}
