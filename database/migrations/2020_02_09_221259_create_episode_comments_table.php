<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('episode_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('website')->nullable();
            $table->text('body');
            $table->boolean('approved')->default(0);
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
        Schema::dropIfExists('episode_comments');
    }
}
