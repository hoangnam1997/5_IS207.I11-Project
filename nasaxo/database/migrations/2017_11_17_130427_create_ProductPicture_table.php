<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductPicture', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->boolean('IsDelete');
            $table->integer('ID_Picture');
            $table->foreign('ID_Picture')->references('id')->on('Picture');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
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
        Schema::dropIfExists('ProductPicture');
    }
}
