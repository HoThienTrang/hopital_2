<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images')->default(config('settings.poster.image_default'));
            $table->string('position');
            $table->tinyInteger('status')->default(config('settings.poster.status.choose'));
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
        Schema::dropIfExists('posters');
    }
}
