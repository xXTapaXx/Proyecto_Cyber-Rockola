<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel</title>

    {!! Html::style('css/semantic.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
</head>
<body>


   <div class="container">
   @yield('content')
   </div>

   <div class="footer">
   @yield('footer')
   </div>

  {!! Html::script('/js/jquery-1.11.3.min.js') !!}
  {!! Html::style('js/bootstrap.js') !!}
   {!! Html::script('/js/semantic.js') !!}
</body>
</html>