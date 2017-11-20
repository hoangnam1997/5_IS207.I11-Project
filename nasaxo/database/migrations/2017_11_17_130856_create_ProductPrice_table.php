<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductPrice', function (Blueprint $table) {
            $table->increments('id');
            // $table->primary('id');
            $table->string('Price');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->boolean('IsDelete');
            $table->integer('ID_Product');
            $table->foreign('ID_Product')->references('id')->on('Product');
            $table->string('Discount');
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
        Schema::dropIfExists('ProductPrice');
    }
}
