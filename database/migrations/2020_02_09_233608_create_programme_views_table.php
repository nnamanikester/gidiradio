<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_id')->unsigned();
            $table->string('ip_address');
            $table->date('date');
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
        Schema::dropIfExists('programme_views');
    }
}
