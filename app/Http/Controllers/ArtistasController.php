<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateArtistaRequest;
use App\Http\Controllers\Controller;
use App\Artista;
use Response;
use View;


class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(Request $request)
    {

        if($request->user()['attributes']['roll'] != "Administrator")
            abort(403);
           
    }

    public function index()
    {

        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateArtistaRequest $request)
    {
        Artista::create($request->all());
        return redirect('artistas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $artistas = Artista::find($id);
        if(is_null($artistas))
        {
            abort(404);
        }
        return view('artistas.show', compact('artistas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $artistas = Artista::find($id);
        if(is_null($artistas))
        {
            abort(404);
        }
        return json_encode($artistas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateArtistaRequest $request)
    {
       $artistas = Artista::find($id);
       $artistas->nombre = $request->input('nombre');
       $artistas->genero = $request->input('genero');
       $artistas->save();

        return redirect('artistas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        Artista::destroy($id);
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));

    }

    public function findAllArtist()
    {
        $artistas = Artista::all();
        return json_encode($artistas);
    }
}
