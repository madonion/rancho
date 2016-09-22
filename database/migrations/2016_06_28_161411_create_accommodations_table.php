<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('category');
            $table->string('beds');
            $table->integer('capacity');
            $table->string('capacity_description');
            $table->text('options');
            $table->text('cooling');
            $table->text('location');
            $table->text('outside');
            $table->text('gtk');
            $table->text('summary');
            $table->text('description');
            $table->text('photos');
            $table->integer('ordering');
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
        Schema::drop('accommodations');
    }
}
