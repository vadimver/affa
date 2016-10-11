<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>AFFA</title>

    <!-- core CSS -->
    <link href="{{ url('assets/css') }}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('assets') }}/jquery-ui/jquery-ui.css">
  </head>
<body>



    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
