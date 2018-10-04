<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        Schema::create('station', function (Blueprint $table) {
            $table->increments('id_station');
            $table->string('name', 100);
            $table->string('location', 225);
            $table->string('date', 100);
            $table->string('detail', 30);
            $table->float('longitude');
            $table->float('latitude');
            $table->string('status', 100)->default('active');
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
        Schema::dropIfExists('station');
    }
}
