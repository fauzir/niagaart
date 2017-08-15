<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <title>NiagaArt | Admin</title>

        <meta name="description" content="lorem ipsum dolor set amet" /> <!--Max 160 characters-->
        <meta name="keywords" content="keyword1, keyword2, keyword3" />
        <meta charset="utf-8" />

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/backend.css') }}">

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        @yield('head-script')
    </head>
    <body>
      <div id="main" style="margin-left: 0px; padding-top: 0px; padding-left: 0px; padding-right: 0px;">
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="active">
                <div class="sidebar-header">
                  <a href="{{ url('/admin') }}">
                    <h3>NiagaArt</h3>
                    <strong><img src="{{ asset('img/logo-round.png') }}" height="38px" alt="Logo Admin | Niaga Art"></strong>
                  </a>
                </div>

                <ul class="list-unstyled components">
                    {{-- <li>
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn btn-danger">
                            <i class="glyphicon glyphicon-th"></i>
                        </button>
                    </li> --}}
                    <li>
                        <a href="{{ url('/admin') }}">
                            <i class="glyphicon glyphicon-stats"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#contentsSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-list"></i>
                            Contents
                        </a>
                        <ul class="collapse list-unstyled" id="contentsSubmenu">
                            <li><a href="{{ route('home.index') }}">Pages</a></li>
                            <li><a href="{{ route('service-niagaart.index') }}">Services</a></li>
                            <li><a href="{{ route('service-item.index') }}">Service Item</a></li>
                            <li><a href="{{ route('product.index') }}">Product</a></li>
                            <li><a href="{{ route('projects-content.index') }}">Projects</a></li>
                            <li><a href="{{ route('project-item.index') }}">Project Items</a></li>
                            <li><a href="{{ route('promotion.index') }}">Promotions</a></li>
                            <li><a href="{{ route('social.index') }}">Social</a></li>
                            <li><a href="{{ route('testimony.index') }}">Testimony</a></li>
                        </ul>
                        <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-pencil"></i>
                            Blog
                        </a>
                        <ul class="collapse list-unstyled" id="blogSubmenu">
                            <li><a href="{{ route('blog-post.index') }}">Post</a></li>
                            <li><a href="{{ route('blog-category.index') }}">Category</a></li>
                            <li><a href="{{ route('blog-tag.index') }}">Tag</a></li>
                        </ul>
                        <a href="{{ route('users.index') }}">
                            <i class="glyphicon glyphicon-user"></i>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="glyphicon glyphicon-link"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/en/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

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
            </div>
        </div>
      </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="{{ asset('frontend/js/tags.js') }}"></script>
         <script type="text/javascript">
           
         </script>
    </body>
</html>
