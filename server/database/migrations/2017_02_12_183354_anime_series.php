<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnimeSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animeSeries', function (Blueprint $table) {
            $table->increments('id');
            $table->char('link', 255);
            $table->integer('number');
            $table->integer('anime_id')->unsigned();
            $table->foreign('anime_id')->references('id')->on('anime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
