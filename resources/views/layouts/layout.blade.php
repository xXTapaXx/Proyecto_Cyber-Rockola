<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>@yield('tittle_browser') - UTN</title>


    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/semantic.css') !!}
    {!! Html::style('css/style.css') !!}




</head>
<body>
<div id="wrapper">
@yield('menu')
    <div class="top">
    @yield('tittle')
    </div>
    <div class="container-fluid">
    @yield('content')
    </div>
    <div class="footer">
    @yield('foot')
    </div>
</div>

   {!! Html::script('/js/jquery-1.11.3.min.js') !!}
   {!! Html::script('/js/bootstrap.min.js') !!}
   {!! Html::script('/js/semantic.js') !!}
   {!! Html::script('/js/util.js') !!}

</body>
</html>