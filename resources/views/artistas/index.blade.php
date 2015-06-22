@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin')
@stop

@section('content')
    <h1>Artistas</h1>

     <a type="button" href="#" class="col-lg-2 btn btn-success submit-button pull-right" data-title="create" data-toggle="modal" data-target="#create" data-placement="top">
                     <span class="glyphicon glyphicon-plus"></span>Crear Articulo
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


            </div>
           </td>
           </tr>
    @endforeach
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