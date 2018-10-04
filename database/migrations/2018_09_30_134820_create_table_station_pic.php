<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStationPic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_pic', function (Blueprint $table) {
            $table->increments('id_stationpic');
            $table->text('file_name');
            $table->integer('id_station')->unsigned();
            $table->foreign('id_station')->references('id_station')->on('station')->onDelete('cascade');
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
        Schema::dropIfExists('station_pic');
    }
        
}
