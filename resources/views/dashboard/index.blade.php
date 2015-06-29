@extends('layouts.layout')

@section('tittle_browser')
Dashboard
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
                     <i class="fa fa-microphone"></i>
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
                     <i class="fa fa-music"></i>
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
