<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>{{$title}}</title>

    <!-- core CSS -->
    <link href="{{ url('assets/css') }}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('assets') }}/jquery-ui/jquery-ui.css">
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('now') }}">AFFA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class = "{{$menu_archive}}"><a href="{{ url('archive') }}">Archive</a></li>
            <li class = "{{$menu_affairs}}"><a href="{{ url('now') }}">Affairs</a></li>
            <li class = "{{$menu_new}}"><a href="{{ url('new') }}">New</a></li>
          </ul>
              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ url('/logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}

                                      </form>
                                  </li>
                              </ul>
                          </li>

                  </ul>
              </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('content')
    </div> <!-- /container -->
    <footer class = "row">
      <div class = "col-sm-9 col-sm-offset-3">
            <p class ="footer">© 2016 </p>
            <p class ="footer"><a href="{{ url('archive') }}">Archive</a></p>
            <p class ="footer"><a href="{{ url('now') }}">Affairs</a></p>
            <p class ="footer"><a href="{{ url('new') }}">New</a></p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({ minDate: 0, maxDate: +1095 });
      } );


    </script>
    <script src="{{ url('assets') }}/js/bootstrap.min.js"></script>
  </body>
</html>
