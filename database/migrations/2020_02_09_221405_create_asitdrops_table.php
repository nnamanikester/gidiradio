<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsitdropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asitdrops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $tabel->integer('user_id')->unsigned();
            $tabel->string('title');
            $table->string('artist');
            $table->string('image');
            $table->string('audio');
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
        Schema::dropIfExists('asitdrops');
    }
}
