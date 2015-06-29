@extends('layouts.layout')

@section('tittle_browser')
Login
@stop

@section('content')
<div class="container">
	<div class="row">
    	<div class="container" id="formContainer">

          <form class="form-signin" id="login" role="form" method="POST" action="{{ url('/auth/login') }}">

            <h3 class="form-signin-heading">Please Sign In</h3>
            <a href="#" id="flipToRecover" class="flipLink">
              <div id="triangle-topright"></div>
            </a>
            <div class="form-group">
            							<div class="ui fluid left icon input">
                                          <input type="email" class="form-control col-md-6" name="email" value="{{ old('email') }}">
                                          <i class="users icon"></i>
                                        </div>
            						</div>

            						<div class="form-group">
            							<div class="ui fluid left icon input">
            							 <input class="form-control" type="password" name="password"/>
            							 <i class="lock icon"></i>
            							</div>
            						</div>

            						<div class="form-group">
            							<div class="col-md-6 col-md-offset-4">
            								<button type="submit" class="btn btn-primary">Login</button>
            								</div>
            						</div>
          </form>

          <form class="form-signin" id="recover" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3 class="form-signin-heading">  Please Sign Up</h3>
            <a href="#" id="flipToLogin" class="flipLink">
              <div id="triangle-topleft"></div>
            </a>

               <div class="ui left icon input">
               <input type="text" name="name" placeholder="Name" class="form-control"/>
               <i class="users icon"></i>
               </div><br/>

               <div class="ui left icon input"><br/>
               <input type="email" name="email" placeholder="Email" class="form-control"/>
               <i class="users icon"></i>
                              </div>

                              <div class="ui left icon input"><br/>
               <input type="password" name="password" placeholder="Password" class="form-control"/>
               <i class="users icon"></i>
                              </div>

                              <div class="ui left icon input"><br/>
               <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control"/>
                <i class="users icon"></i>
               </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
                </form>

        </div> <!-- /container -->
	</div>
</div>
@stop

@section('css')
 {!! Html::style('/css/login.css') !!}
@stop

@section('js')
 {!! Html::script('/js/login.js') !!}
@stop