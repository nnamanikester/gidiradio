<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favico')->nullable();
            $table->string('link')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('signboard_title')->nullable();
            $table->string('signboard_button_text')->nullable();
            $table->string('signboard_button_link')->nullable();
            $table->string('signboard_image')->nullable();
            $table->string('default_thumbnail')->nullable();
            $table->string('tag_line')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('radio_station')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}
