<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        @yield('head-script')

    </head>
    <style>
    .navbar-open {
      background-color: #c73434;
    }

    /* The side navigation menu */
    .sidenav {
      height: 100%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: fixed; /* Stay in place */
      z-index: 1; /* Stay on top */
      top: 0;
      left: 0;
      background-color: #c73434; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    }

    .panel-collapse {
      background-color: #8f2323; /* Black*/
    }

    /* The navigation menu links */
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 15px;
      color: #ffffff;
      display: block;
      transition: 0.3s
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover, .offcanvas a:focus{
      color: #4e4e4e;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s;
      padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
    <body>
      <div id="main">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="{{ url('/admin') }}">Dashboard</a>
          <a data-toggle="collapse" href="#collapseContent">Contents</a>
          <div id="collapseContent" class="panel-collapse collapse">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('service-catalogue.index') }}">Service Catalogue</a>
            <a href="{{ route('service.index') }}">Service</a>
            <a href="{{ route('projects.index') }}">Projects</a>
            <a href="{{ route('project-item.index') }}">Project Items</a>
            <a href="{{ route('about.index') }}">About</a>
            <a href="{{ route('contact.index') }}">Contact</a>
            <a href="{{ route('product.index') }}">Product</a>
            <a href="{{ route('promotion.index') }}">Promotions</a>
          </div>
          <a data-toggle="collapse" href="#collapseBlog">Blog</a>
          <div id="collapseBlog" class="panel-collapse collapse">
            <a href="{{ route('blog.index') }}">Blog Post</a>
            <a href="{{ route('blog-category.index') }}">Blog Category</a>
          </div>
          <a data-toggle="collapse" href="#collapseUser">Users</a>
          <div id="collapseUser" class="panel-collapse collapse">
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('roles.index') }}">Roles</a>
            <a href="{{ route('permissions.index') }}">Permissions</a>
          </div>
          <a href="#">Logout</a>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
          <button class="btn-default navbar-brand navbar-open"type="button" name="button" onclick="openNav()"><strong>-</strong></button>
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        NiagaArt
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Logout</a></li>
                        @else
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if (Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_message') }}
                </div>
            </div>
        @endif

        @yield('content')

        <hr/>

        <div class="container">
            &copy; {{ date('Y') }}. Created by <a href="http://www.41studio.com">41studio</a>
            <br/>
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>

        <script type="text/javascript">
            $(function () {
                // Navigation active
                $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
            });
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>
      </div>
    </body>
</html>
