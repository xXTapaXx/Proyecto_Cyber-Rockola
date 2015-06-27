<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistSong extends Model
{
    protected $table = 'artistSong';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idArtist',
        'idSong'
    ];
}
