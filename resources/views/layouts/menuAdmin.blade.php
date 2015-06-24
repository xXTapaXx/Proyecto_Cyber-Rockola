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
                                        <p class="text-left"><strong>Nombre Apellido</strong></p>
                                        <p class="text-left small">correoElectronico@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
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
				<span class="small-nav"> <span class="logo">  UTN  </span>> </span>
				<span class="full-nav"> < Bootsnipp > </span>
			</a>
		</div>
		<div class="">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="/home">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
							<span class="glyphicon glyphicon-home"></span>
						</span>
						<span class="full-nav"> </span>
					</a>
				</li>
				<li>
					<a href="#about-us">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Music">
							<span class="fa fa-music"></span>
						</span>
						<span class="full-nav"> About Us </span>
					</a>
				</li>
				<li>
					<a href="#contact-us">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Contact Us">
							<span class="glyphicon glyphicon-comment"></span>
						</span>
						<span class="full-nav"> Contact Us </span>
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
