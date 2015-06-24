@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin')
@stop

@section('content')
    <h1>Canciones</h1>

     <a type="button" href="#" class="col-lg-2 btn btn-success submit-button pull-right" data-title="create" data-toggle="modal" data-target="#create" data-placement="top">
       <span class="glyphicon glyphicon-plus"></span>Subir Cancion</a>


    <br/><br/>

    {!! Form::open(['route' => 'canciones.store',
                    'method' => 'POST',
                    'class' => 'dropzone',
                    'id' => 'my-dropzone',
                    'files' => true]) !!}


@stop

@section('css')

 {!! Html::style('/css/dropzone.css') !!}


@stop

@section('js')
 {!! Html::script('/js/dropzone.js') !!}
  {!! Html::script('/js/upload.js') !!}
@stop

@include('songs.create')

