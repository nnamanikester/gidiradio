<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOapSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oap_social', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('oap_id')->unsigned();
            $table->integer('social_id')->unsigned();
            $table->timestamps();

            $table->foreign('oap_id')
                ->references('id')
                ->on('oaps')
                ->onDelete('cascade');

                $table->foreign('social_id')
                    ->references('id')
                    ->on('socials')
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
        Schema::dropIfExists('oap_social');
    }
}
