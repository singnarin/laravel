<html>
<head>
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  <meta charset="utf-8" />
  <title>My Template</title>
</head>
<body>
<div class="page-header" align="center">
  <h1>Laravel 5.2</h1>
</div>
  <div class="container-fluid">
    <div id="content">
      @yield('content')
    </div>
  </div>
  {!! Html::script('js/jquery.min.js') !!}
  {!! Html::script('bootstrap/js/bootstrap.min.css') !!}
</body>
</html>
