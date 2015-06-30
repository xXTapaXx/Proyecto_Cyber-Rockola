@extends('layouts.layout')

@section('tittle_browser')
Dashboard
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Dashboard'))
@stop

@section('content')


<div class="jumbotron">
  <div class="container">
    <h1>Permission Denied</h1>
    <hr>	
    <p>YOU DO NOT HAVE PERMISSION TO VISIT THIS PAGE!!!.</p>
    <hr>
    <a href="{{url('clientes')}}" class="btn btn-primary btn-lg">RETURN</a>
  </div>
</div>

@stop