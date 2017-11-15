<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailNtonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_nton', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Account_id')->unsigned();
            $table->integer('test_id')->unsigned();
        });
        Schema::table('detail_nton', function (Blueprint $table) {
            $table->foreign('Account_id')->references('id')->on('Account')->onDelete('cascade');
            $table->foreign('test_id')->references('id')->on('test_nton')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_nton', function (Blueprint $table) {
            //
        });
    }
}
