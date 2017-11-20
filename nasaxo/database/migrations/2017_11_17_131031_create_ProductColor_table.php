<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductColor', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
            $table->integer('ID_Color');
            $table->foreign('ID_Color')->references('id')->on('Color');
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
        Schema::dropIfExists('ProductColor');
    }
}
