<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateSongRequest;
use App\Jobs\SendSongs;
use App\Http\Controllers\Controller;
use App\Song;
use App\Artista;
use App\ArtistSong;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(Request $request)
    {
        if($request->user()['attributes']['roll'] != "Administrator")
            abort(404);
    }
    public function index()
    {
        //$artistas = \DB::table('artistas')->orderBy('id', 'asc')->lists('nombre','genero','id');
        //$artistas = Artista::all();
        $artistas = Artista::lists('nombre','id');
        $idArtistas = Artista::lists('id');
        $songs = Song::paginate(5);
        return view('songs.index', compact('songs','artistas','idArtistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */



    public function store(CreateSongRequest $request)
    {
        $titulo = $request->get('titulo');
        $artista = $request->get('artista');

        $dir = public_path().'/uploads/';

        $files = $request->file('file');

        foreach ($files as $file)
        {
            $fileName = $file->getClientOriginalName();

            $file->move($dir,$fileName);
            $idSong = Song::insertGetId(['name'=> $titulo,'route'=> $fileName]);
            ArtistSong::insert(['idArtist' => $artista, 'idSong' => $idSong ]);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        if(is_null($song))
        {
            abort(404);
        }
        return json_encode($song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $rules=
        [
            'name' => 'required'
        ];
        $this->validate($request, $rules);

        $song = Song::find($id);
        $song->name = $request->input('name');
        $song->save();

        return redirect('canciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $song = Song::find($id);

        if($song)
            $song->delete();
        return redirect('canciones');
    }

     public function SendSongs($id)
    {
        

        $this->dispatch(new SendSongs($id));

        return $id;
    }

    public function findAllArtist()
    {
        $artistas = Artista::all();
        return json_encode($artistas);
    }
}
