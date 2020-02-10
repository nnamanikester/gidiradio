<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('website')->nullable();
            $table->text('body');
            $table->boolean('approved')->default(0);
            $table->timestamps();


            $table->foreign('programme_id')
                ->references('id')
                ->on('programmes')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_comments');
    }
}
