@extends('layouts.layout')

@section('tittle_browser')
Songs
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Music'))
@stop

@section('content')
    <h1>Songs</h1>


<table class="ui celled table">
<thead>
                          <tr>
                           <th>Search by Title</th>
                           <th>Search by Artist</th>

                          </tr>
                        </thead>
    <tbody>
        <tr>
          <td>
          <div class="form-group col-lg-6"><br/>



                          {!! Form::open(array('route' => 'search','method'=>'get')) !!}
                            <div class="modal-body">

                                   <!-- Title Form Input -->
                                <div class="form-group">
                                    {!! Form::select('title',$songsTitle, null, array('class'=>'form-control col-lg-6')) !!}                                
                                </div>

                           </div>
                               <div class="modal-footer ">
                              <div class="ui buttons">
                               <button class="ui positive button" type="submit" id="btn-students-save">Search</button>
                             </div>
                          {!! Form::close() !!}

          </div>

          </td>
          <div class="form-group col-lg-6"><br/>
          <td>
           {!! Form::open(array('route' => 'search','method'=>'get')) !!}
                            <div class="modal-body">

                                   <!-- Title Form Input -->
                                <div class="form-group">
                                    {!! Form::select('title',$artistas, null, array('class'=>'form-control col-lg-6')) !!}                                
                                </div>

                           </div>
                               <div class="modal-footer ">
                              <div class="ui buttons">
                               <button class="ui positive button" type="submit" id="btn-students-save">Search</button>
                             </div>
                          {!! Form::close() !!}

                         

          </div>
          </td>
        </tr>
     </tbody>
</table>

    <br/><br/>
     <table class="ui celled table">
               <thead>
                          <tr>
                           <th>Name</th>
                           <th>Artista</th>
                           <th>Route</th>
                           <th>Options</th>
                          </tr>
                        </thead>
                        <tbody>
         @foreach($songs as $song)
                <tr>
                 <td>{{ $song->name }}</td>
                 <td>{{ $song->nameArtista }}</td>
                  <td>

                    <a href="#">{!! Html::image("public/uploads/".$song->route, $song->route,array('height'=>'42','width'=>'250'),true) !!}</a>

                  </td>
                <td>
               {{-- <a class="ui inverted orange button" id="{{$song->id}}" data-title="edit" data-toggle="modal" data-target="#edit" data-placement="top"><i class="icon Edit"></i>Edit</a>--}}

                     {!! Form::open(['url' => 'canciones/'.$song->id,
                                     'method' => 'DELETE',
                                     'class' => 'formDelete',
                                      'id' => 'form'.$song->id]) !!}
                     <div class="ui buttons">
          
                  <a class="ui inverted blue button" id="{{$song->id}}" data-title="send" data-toggle="modal" data-target="#send" data-placement="top"><i class="icon Edit"></i>Send</a>
                </div>

                 </div>
                 {!! Form::close() !!}
                </td>
                </tr>
         @endforeach

         {!! $songs->render() !!}
                  </tbody>

                </table>



{!! Form::open(['action' => ['ClientesController@autocomplete'], 'method' => 'GET']) !!}
    {!! Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name']) !!}
    {!! Form::submit('Search', array('class' => 'button expand')) !!}
{!! Form::close() !!}










<?php echo $songs->render(); ?>



@stop

@section('css')

 {!! Html::style('/css/dropzone.css') !!}


@stop

@section('js')



{!! Html::script('/js/jquery-2.1.4 .js') !!}
{!! Html::script('/js/jquery-ui.js') !!}
 {!! Html::script('/js/dropzone.js') !!}
 {!! Html::script('/js/artistas.js') !!}
  {!! Html::script('/js/upload.js') !!}
@stop


