<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistSong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idArtist');
            $table->integer('idSong');
            $table->timestamps();

            $table->foreign('idArtist')->references('idArtist')->on('artistas');
            $table->foreign('idSong')->references('idSong')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
