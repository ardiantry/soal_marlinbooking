<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->string('time', 100);
            $table->string('message', 225)->nullable();
            $table->string('status', 100);
            $table->text('is_seen', 30);
            $table->integer('for', 11);
            $table->integer('id_penunggu')->unsigned();
            $table->foreign('id_penunggu')->references('id_penunggu')->on('penunggu')->onDelete('cascade');;
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
        Schema::dropIfExists('penunggu');
    }
}
