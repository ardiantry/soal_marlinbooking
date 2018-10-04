<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenunggu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penunggu', function (Blueprint $table) {
            $table->increments('id_penunggu');
            $table->string('name', 100);
            $table->string('password', 225);
            $table->string('email', 100);
            $table->string('phone', 30)->nullable();
            $table->text('address')->nullable();
            $table->string('job', 100)->nullable();
            $table->string('institution', 100)->nullable();
            $table->text('pic')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->rememberToken();
            $table->string('level', 15);
            $table->string('status', 15)->default('active');
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
