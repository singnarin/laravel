<html>
<head>
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  <meta charset="utf-8" />
  <title>My Template</title>
</head>
<body>
  <h1>My Template</h1>
  <div class="container-fluid">
    @yield('content')
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.css"></script>
</body>
</html>
