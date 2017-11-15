<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{

    public function up()
    {
        Schema::create('Role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Account_id')->unsigned();
            $table->string('Description');
            $table->foreign('Account_id')->references('id')->on('Account')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::table('Role', function (Blueprint $table) {
            //
        });
    }
}
