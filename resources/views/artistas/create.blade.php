@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin')
@stop

@section('content')
    <h1>Nuevo artista</h1>
    <hr>

    {!! Form::open(['url' => 'artistas']) !!}
        <!-- Title Form Input -->
        <div class="form-group">
            {!! Form::label('nombre','Nombre: ')  !!}
            {!! Form::text('nombre', null , ['class'=>'form-control'])  !!}
        </div>

        <!-- Body Form Input -->
        <div class="form-group">
            {!! Form::label('genero','Género: ')  !!}
            {!! Form::text('genero', null , ['class'=>'form-control'])  !!}
        </div>

        <!-- Submit -->
        <div class="form-group">
            {!! Form::submit('Agregar Artista', ['class'=>'btn btn-primary form-control'])  !!}
        </div>
    {!! Form::close() !!}

    {{-- var_dump($errors->toArray()) --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@stop