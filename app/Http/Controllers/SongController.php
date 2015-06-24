<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $songs = Song::paginate(5);
        return view('songs.index', compact('songs'));
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



    public function store(Request $request)
    {
        $titulo = $request->get('titulo');
        $artista = $request->get('artista');
        $dir = public_path().'/uploads/ ';

        $files = $request->file('file');

        foreach ($files as $file)
        {
            $fileName = $file->getClientOriginalName();

            $file->move($dir,$fileName);
            Song::insert(['name'=> $titulo, 'route'=> '/uploads/'.$fileName]);
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
        Song::find($id)->delete();

        return redirect('canciones');
    }
}