<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rating', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->string('Point');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
            $table->integer('ID_Users');
            $table->foreign('ID_Users')->references('id')->on('Users');
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
        Schema::dropIfExists('Rating');
    }
}
