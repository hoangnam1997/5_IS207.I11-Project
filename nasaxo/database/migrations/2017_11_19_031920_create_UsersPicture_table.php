<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersPicture', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->integer('ID_Users');
            $table->foreign('ID_Users')->references('id')->on('Users');
            $table->integer('ID_Picture');
            $table->foreign('ID_Picture')->references('id')->on('Picture');
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
        Schema::dropIfExists('UsersPicture');
    }
}
