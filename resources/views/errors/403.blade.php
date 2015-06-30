@extends('layouts.layout')



@section('content')


<div class="jumbotron">
  <div class="container">
  <center>

    <h1>Permission Denied</h1>
    <hr>
    <p>YOU DO NOT HAVE PERMISSION TO VISIT THIS PAGE!!!.</p>
    <hr>
    <a href="{{url('dashboard')}}" class="btn btn-primary btn-lg">RETURN</a>
  </center>
   </div>
</div>

@stop