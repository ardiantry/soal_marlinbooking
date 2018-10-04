<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDownloadHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_history', function (Blueprint $table) {
            $table->increments('id_download');
            $table->dateTime('download_at');
            $table->integer('id_data')->unsigned();
            $table->foreign('id_data')->references('id_data')->on('data')->onDelete('cascade');
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
        Schema::dropIfExists('download_history');
    }
}
