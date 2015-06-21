@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin')
@stop

@section('content')
    <h1>Artistas</h1>

    @foreach($artistas as $artista)
        <article>

            <a href="/artistas/edit/{{ $artista->id  }}"><h2>{{ $artista->nombre }}</h2></a>

            {{--
                <a href="{{ action('ArtistasController@show', [$artista->id]) }}"><h2>{{ $artista->nombre }}</h2></a>
                <a href="{{ url('/artistas', $artista->id) }}"><h2>{{ $artista->nombre }}</h2></a>
            --}}

            <div class="body">
                {{ $artista->genero }}
            </div>
        </article>
        <br>
    @endforeach
<hr>
    <a class="btn btn-primary btn-lg" href="{{ url('artistas/create') }}"
       role="button">Crear articulo</a>

@stop
