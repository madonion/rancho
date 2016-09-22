<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned();
            $table->integer('year')->unsigned();
            $table->integer('default')->unsigned();
            $table->integer('low')->unsigned();
            $table->integer('medium')->unsigned();
            $table->integer('high')->unsigned();
            $table->integer('peak')->unsigned();
            $table->integer('special')->unsigned();
            $table->integer('extra_bed_price')->unsigned();
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
        Schema::drop('accommodations_prices');
    }
}
