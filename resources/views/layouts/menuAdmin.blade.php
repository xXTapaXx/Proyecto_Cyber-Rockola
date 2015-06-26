<?php

    $menu = array(
    array('icon'=>'fa fa-user','title'=>'Artist','url'=>'artistas'),
    array('icon'=>'fa fa-music','title'=>'Music','url'=>'canciones'),
    array('icon'=>'fa fa-user','title'=>'Cliente','url'=>'clientes'));

    ?>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>Nombre</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="dropdown-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>{!! Auth::user()['attributes']['roll'] !!}</strong></p>
                                        <p class="text-left">{!! Auth::user()['attributes']['name'] !!}</p>
                                        <p class="text-left small">{!! Auth::user()['attributes']['email'] !!}</p>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-login dropdown-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                        <li><a href="{{url('auth/logout')}}" class="btn btn-danger btn-block">Cerrar Sesion</a></li>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

{{--}} Aqui empieza el menu left{{--}}
<div class="navbar navbar-inverse navbar-twitch" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<span class="small-nav"> <span class="logo">  UTN  </span> </span>
			</a>
		</div>
		<div class="">
			<ul class="nav navbar-nav">


				@foreach($menu as $item)
              @if($ruta == $item['title'])
                     <li class="active">
               @else
                       <li>
               @endif
                       <a href="{!! $item['url'] !!}">
                        <span class="small-nav" data-toggle="tooltip" data-placement="right" title="{!! $item['title'] !!}">
                            <span class="{!! $item['icon'] !!}"></span>
                        </span>

                    </a>
                       </li>
            @endforeach

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
