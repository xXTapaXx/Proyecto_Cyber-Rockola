@extends('layouts.layout')

@section('tittle_browser')
Index
@stop

@section('menu')
 @include('layouts.menuAdmin',array('ruta'=>'Dashboard'))
@stop

@section('content')
<div class="container">
	<div class="row">
	<div class="jumbotron">

	<h1>Welcome {!! Auth::user()['attributes']['name'] !!}!!!</h1>
	</div>
		<div class="col-sm-6">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="text">
                    <var>{!! $artists !!}</var>
                    <label class="text-muted">Artist</label>
                </div>
           
            </div>
		</div>
        <div class="col-sm-6">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="glyphicon glyphicon-star"></i>
                </div>
                <div class="text">
                    <var>{!! $songs !!}</var>
                    <label class="text-muted">Songs</label>
                </div>

            </div>
		</div>

	</div>
</div>

</div>
@stop
