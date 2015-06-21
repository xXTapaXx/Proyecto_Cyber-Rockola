
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

    {!! Form::open(['url' => 'artistas/update/'.$artistas->id, 'method' => 'PUT']) !!}

        <!-- Title Form Input -->
        <div class="form-group">
            {!! Form::label('nombre','Nombre: ')  !!}
            {!! Form::text('nombre', $artistas->nombre, ['class'=>'form-control'])  !!}
        </div>

        <!-- Body Form Input -->
        <div class="form-group">
            {!! Form::label('genero','Género: ')  !!}
            {!! Form::text('genero', $artistas->genero, ['class'=>'form-control'])  !!}
        </div>

        <!-- Submit -->
        <div class="form-group">
            {!! Form::submit('Guardar Artista', ['class'=>'btn btn-primary form-control'])  !!}
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