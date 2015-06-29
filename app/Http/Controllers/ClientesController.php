<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artista;
use App\Song;
use App\ArtistSong;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(Request $request)
    {
        if($request->user()['attributes']['roll'] != "Cliente")
            abort(404);
    }
    public function index()
    {
        //$artistas = Artista::all();
        //$artistas = \DB::table('artistas')->orderBy('id', 'asc')->lists('nombre','genero','id');
        //$songsTitle = \DB::table('songs')->orderBy('id', 'asc')->lists('name');
        $search = array('artistas','titulo');
        $songs = ArtistSong::join('artistas','artistSong.idArtist','=','artistas.id')
            ->join('songs','artistSong.idSong','=','songs.id')
            ->select('songs.name','songs.id','songs.route','artistas.nombre','artistas.genero')
            ->paginate(15);
        //return view('songs.index', compact('songs','artistas'));
        return view('clientes.index', compact('songs','search'));
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function search($search)
    {
        $artistas = Artista::orderBy('id', 'asc')->lists('nombre','genero','id');
        $songsTitle = Song::orderBy('id', 'asc')->lists('name');
        $artistas = Artista::where('nombre', '=', $search);
      

        $songs = Song::paginate(3);
        //return view('songs.index', compact('songs','artistas'));
        return view('clientes.index', compact('songs','artistas','songsTitle'));
    }


    public function autocompleteArtistas(){

    $term = \Input::get('term');
    $results = array();
    $queries = \DB::table('artistas')
        ->where('nombre', 'LIKE', '%'.$term.'%')
        ->orWhere('nombre', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
    foreach ($queries as $query)
    {
        $results[] = [ 'id' => $query->id, 'value' => $query->nombre];
    }
    return \Response::json($results);
    }

    public function autocompleteTitle(){

    $term = \Input::get('term');
    $results = array();
    $queries = \DB::table('songs')
        ->where('name', 'LIKE', '%'.$term.'%')
        ->orWhere('name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
    foreach ($queries as $query)
    {
        $results[] = [ 'id' => $query->id, 'value' => $query->name];
    }
    return \Response::json($results);
    }


    public function searchArtist($option,$search)
    {
        if($option == 'Artist')
            return ArtistSong::join('artistas','artistSong.idArtist','=','artistas.id')
                ->join('songs','artistSong.idSong','=','songs.id')
                ->select('songs.name','songs.id','songs.route','artistas.nombre','artistas.genero')
                ->where('artistas.nombre','=',$search)
                ->paginate(15);
            else
                return ArtistSong::join('artistas','artistSong.idArtist','=','artistas.id')
                    ->join('songs','artistSong.idSong','=','songs.id')
                    ->select('songs.name','songs.id','songs.route','artistas.nombre','artistas.genero')
                ->where('songs.name','=',$search)
             ->paginate(15);

    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
