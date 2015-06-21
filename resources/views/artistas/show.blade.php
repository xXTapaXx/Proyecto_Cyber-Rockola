@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin')
@stop

@section('content')
        <article>
            <h1>{{ $artistas->nombre }}</h1>
            <div class="body">
                {{ $artistas->genero }}
            </div>
        </article>
        <a href="/artistas"><h2>Volver</h2></a>
@stop