<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductSize', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->integer('ID_Size');
            $table->foreign('ID_Size')->references('id')->on('Size');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
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
        Schema::dropIfExists('ProductSize');
    }
}
