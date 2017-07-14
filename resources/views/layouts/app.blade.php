<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NiagaArt | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('service', ['name' => 'home-living']) }}">Home Living</a></li>
            <li><a href="{{ route('service', ['name' => 'apartment']) }}">Apartment</a></li>
            <li><a href="{{ route('service', ['name' => 'cafe-foodcourt']) }}">Cafe & FoodCourt</a></li>
            <li><a href="{{ route('service', ['name' => 'shop-office']) }}">Shop / Office</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('service', ['name' => 'flooring']) }}">Flooring</a></li>
            <li><a href="{{ route('service', ['name' => 'blind']) }}">Blind</a></li>
            <li><a href="{{ route('service', ['name' => 'wall-paper']) }}">Wall Paper</a></li>
            <li><a href="{{ route('service', ['name' => 'wall-clading']) }}">Wall Clading</a></li>
            <li><a href="{{ route('service', ['name' => 'chair']) }}">Chair</a></li>
          </ul>
        </li>
          <li><a href="{{ route('projects') }}">Projects</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
        <h3 class="muted"><img src="{{ URL::to('img/NiagaArt.png') }}" height="70" width="70" alt=""></h3>
      </div>

      @yield('content')

      <div class="footer">
        <p>&copy; NiagaArt 2017</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap-transition.js') }}"></script>
    <script src="{{ asset('js/bootstrap-alert.js') }}"></script>
    <script src="{{ asset('js/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('js/bootstrap-scrollspy.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tab.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tooltip.js') }}"></script>
    <script src="{{ asset('js/bootstrap-popover.js') }}"></script>
    <script src="{{ asset('js/bootstrap-button.js') }}"></script>
    <script src="{{ asset('js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('js/bootstrap-carousel.js') }}"></script>
    <script src="{{ asset('js/bootstrap-typeahead.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdown.js') }}"></script>

  </body>
</html>
