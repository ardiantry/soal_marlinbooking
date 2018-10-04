<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id_data');
            $table->timestamp('data_date', 3);
            $table->string('tz', 150);
            $table->double('awlr');
            $table->double('winddirect');
            $table->double('windspeed');
            $table->double('tegangan_accu');
            $table->double('teg_bat_lithium');
            $table->string('status', 15)->default('active');
            $table->dateTime('upload_at')->useCurrent();
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
        Schema::dropIfExists('data');
    }
}
