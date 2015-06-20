@extends('app')

@section('content')
        <article>
            <h1>{{ $artistas->nombre }}</h1>
            <div class="body">
                {{ $artistas->genero }}
            </div>
        </article>
@stop