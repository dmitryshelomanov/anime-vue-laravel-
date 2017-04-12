<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 255);
            $table->char('description', 255);
            $table->text('text');
            $table->char('img', 255);
            $table->integer('year');
            $table->integer('time_series');
            $table->char('type', 255);
            $table->char('genre', 255);
            $table->integer('series_all');
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
