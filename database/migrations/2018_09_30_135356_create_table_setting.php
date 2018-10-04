<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id_setting');
            $table->string('site_name', 150);
            $table->text('site_desc');
            $table->string('email', 100);
            $table->string('phone', 30);
            $table->string('home_message', 150);
            $table->text('logo_icon');
            $table->text('logo_txt');
            $table->text('logo_txt_black');
            $table->text('favicon');
            $table->text('login_banner');
            $table->string('footer', 150);
            $table->text('background_login');
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
        Schema::dropIfExists('setting');
    } //
}
