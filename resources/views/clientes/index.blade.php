@extends('layouts.layout')

@section('tittle_browser')
Songs
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Cliente'))

@stop

@section('content')
    <h1>Songs</h1>

  <div class="ui right labeled input">
    <input type="text" placeholder="Find Songs" id="inputSearch">

    <div class="ui dropdown label">
      <div class="text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnSearch">Search</div>
      <i class="dropdown icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
         <ul class="dropdown-menu">
            <li><a href="#" data-title="asignSearch" id="Artist">Artist</a></li>
            <li><a href="#" data-title="asignSearch" id="Title">Title</a></li>
         </ul>
    </div>

  </div><br/>
 <span id="ErrorMsg"></span>

    <br/><br/>
     <table class="ui celled table" id="tableIndex">
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
                 <td>{!! $song->name !!}</td>
                 <td>{!! $song->nombre !!}</td>
                 <td>{!! $song->genero !!}</td>
                <td>
               {{-- <a class="ui inverted orange button" id="{{$song->id}}" data-title="edit" data-toggle="modal" data-target="#edit" data-placement="top"><i class="icon Edit"></i>Edit</a>--}}

                     {!! Form::open(['url' => 'canciones/'.$song->id,
                                     'method' => 'DELETE',
                                     'class' => 'formDelete',
                                      'id' => 'form'.$song->id]) !!}
                     <div class="ui buttons">

                  <a class="ui inverted blue button" id="{{$song->route}}" data-title="send" ><i class="icon Play"></i>Send</a>
                </div>

                 </div>
                 {!! Form::close() !!}
                </td>
                </tr>
         @endforeach

         {!! $songs->render() !!}
                  </tbody>

                </table>



<?php echo $songs->render(); ?>




@stop

@section('css')


  {!! Html::style('css/jquery-ui.css') !!}


@stop

@section('js')
 {!! Html::script('/js/client.js') !!}
 {!! Html::script('/js/jquery-2.1.4 .js') !!}
 {!! Html::script('/js/jquery-ui.js') !!}
 {!! Html::script('/js/artistas.js') !!}
@stop












