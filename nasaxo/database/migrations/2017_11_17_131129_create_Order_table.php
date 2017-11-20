<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->string('Description');
            $table->integer('ID_Promotion');
            $table->foreign('ID_Promotion')->references('id')->on('Promotion');
            $table->integer('ID_DeliveryPlace');
            $table->foreign('ID_DeliveryPlace')->references('id')->on('DeliveryPlace');
            $table->date('CreateDate');
            $table->date('ConfirmDate');
            $table->boolean('IsPaied');
            $table->boolean('IsDelivered');
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
        Schema::dropIfExists('Order');
    }
}
