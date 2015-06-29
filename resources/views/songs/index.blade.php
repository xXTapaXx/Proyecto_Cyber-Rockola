@extends('layouts.layout')

@section('tittle_browser')
Songs
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Music'))
@stop

@section('content')
    <h1>Songs</h1>

     <a type="button" href="#" class="col-lg-2 btn btn-success submit-button pull-right" data-title="create" data-toggle="modal" data-target="#create" data-placement="top">
       <span class="glyphicon glyphicon-plus"></span>Subir Cancion</a>


    <br/><br/>
     <table class="ui celled table">
               <thead>
                          <tr>
                           <th>Name</th>
                           <th>Route</th>
                           <th>Options</th>
                          </tr>
                        </thead>
                        <tbody>
         @foreach($songs as $song)
                <tr>
                 <td>{{ $song->name }}</td>
                  <td>{{ $song->route }}</td>
                <td>
               {{-- <a class="ui inverted orange button" id="{{$song->id}}" data-title="edit" data-toggle="modal" data-target="#edit" data-placement="top"><i class="icon Edit"></i>Edit</a>--}}

                     {!! Form::open(['url' => 'canciones/'.$song->id,
                                     'method' => 'DELETE',
                                     'class' => 'formDelete',
                                      'id' => 'form'.$song->id]) !!}
                     <div class="ui buttons">
                  <a class="ui inverted red button" id="{{$song->id}}" data-title="assignDelete" data-toggle="modal" data-target="#delete" data-placement="top"><i class="icon Delete"></i>Delete</a>
                  <div class="or"></div>
                  <a class="ui inverted blue button" id="{{$song->id}}" data-title="edit" data-toggle="modal" data-target="#edit" data-placement="top"><i class="icon Edit"></i>Edit</a>
                </div>

                 </div>
                 {!! Form::close() !!}
                </td>
                </tr>
         @endforeach


                  </tbody>

                </table>
{!! $songs->render() !!}


@stop

@section('css')

 {!! Html::style('/css/dropzone.css') !!}


@stop

@section('js')
 {!! Html::script('/js/dropzone.js') !!}
 {!! Html::script('/js/artistas.js') !!}
  {!! Html::script('/js/upload.js') !!}
@stop

@include('songs.create')
@include('songs.edit')
@include('songs.delete')
