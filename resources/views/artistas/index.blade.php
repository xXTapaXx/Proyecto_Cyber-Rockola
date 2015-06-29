@extends('layouts.layout')

@section('tittle_browser')
Artistas
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Artist'))
@stop

@section('content')

    <h1>Artist</h1>

@include('errors.list')
     <a type="button" href="#" class="col-lg-2 btn btn-success submit-button pull-right" data-title="create" data-toggle="modal" data-target="#create" data-placement="top">
                     <span class="glyphicon glyphicon-plus"></span>New Artist
                </a>

                <br/><br/>
          <table class="ui celled table">
          <thead>
                     <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Options</th>
                     </tr>
                   </thead>
                   <tbody>
    @foreach($artistas as $artista)
           <tr>
            <td>{{ $artista->nombre }}</td>
             <td>{{ $artista->genero }}</td>
           <td>
           <a class="ui inverted orange button" id="{{$artista->id}}" data-title="edit" data-toggle="modal" data-target="#edit" data-placement="top"><i class="icon Edit"></i>Edit</a>

            

            {{--
                <a href="{{ action('ArtistasController@show', [$artista->id]) }}"><h2>{{ $artista->nombre }}</h2></a>
                <a href="{{ url('/artistas', $artista->id) }}"><h2>{{ $artista->nombre }}</h2></a>            
            
            
            <div class="body">
                {{ $artista->genero }}
            </div>   

            <a href="{{ url('/artistas/delete', $artista->id) }}"><h6>Delete</h6></a>--}}

        </article>
        <br>
   @endforeach

            </div>
           </td>
           </tr>
   
             </tbody>

           </table>

<hr>


@stop



@section('js')

 {!! Html::script('/js/artistas.js') !!}

@stop


@include('artistas.create')
@include('artistas.edit')
@include('artistas.delete')
