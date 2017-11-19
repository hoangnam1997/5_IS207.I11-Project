<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_Role', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->integer('ID_Role');
            $table->foreign('ID_Role')->references('id')->on('Role');
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
        Schema::dropIfExists('User_Role');
    }
}
