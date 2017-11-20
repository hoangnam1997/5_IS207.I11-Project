<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DeliveryPlace', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->integer('ID_Order');
            $table->foreign('ID_Order')->references('id')->on('Order');
            $table->integer('ID_Ward');
            $table->foreign('ID_Ward')->references('id')->on('Ward');
            $table->string('ReceiveName');
            $table->string('NumberPhone');
            $table->string('DeliveryPlaces');//Khac voi ten bang
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
        Schema::dropIfExists('DeliveryPlace');
    }
}
