<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artista;
use App\Song;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$artistas = Artista::all();
        $artistas = \DB::table('artistas')->orderBy('id', 'asc')->lists('nombre','genero','id');
        $songsTitle = \DB::table('songs')->orderBy('id', 'asc')->lists('name');
        $songs = Song::paginate(3);
        //return view('songs.index', compact('songs','artistas'));
        return view('clientes.index', compact('songs','artistas','songsTitle'));
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
        $artistas = \DB::table('artistas')->orderBy('id', 'asc')->lists('nombre','genero','id');
        $songsTitle = \DB::table('songs')->orderBy('id', 'asc')->lists('name');
        $artistas = Artista::where('nombre', '=', $search);
      

        $songs = Song::paginate(3);
        //return view('songs.index', compact('songs','artistas'));
        return view('clientes.index', compact('songs','artistas','songsTitle'));
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
