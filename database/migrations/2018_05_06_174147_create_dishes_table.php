<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->text('description');
          $table->string('image_url');
          $table->float('price', 8, 2);
          $table->integer('main_id')->unsigned();
          $table->timestamps();
          $table->foreign('main_id')->references('id')->on('mains')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
