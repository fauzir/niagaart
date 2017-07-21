<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NiagaArt | @yield('title')</title>
    <meta name="description" content="NiagaArt, Home and Interior Design, Best Interior Design, Home and Living Design, Design, Room and Interior, Home and Living"/>
    <meta name="NiagaArt Website" content="NiagaArt, Home and Interior Design, Best Interior Design, Home and Living Design, Design, Room and Interior, Home and Living" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="/assets/apple-touch-icon-52x52.png" rel="apple-touch-icon" sizes="52x52" />
    <link href="/assets/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="/assets/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="/assets/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="/assets/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144" />
    <link href="/assets/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="/humans.txt" rel="author" />
    <!-- Bootstrap -->
    <link href="{{ asset('niagaart/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('niagaart/css/font-awesome.min.css') }}">
    <link href="{{ asset('niagaart/css/styles.css') }}" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico"/>
    <!--Google analytic-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-97258xxx-1', 'auto'); ga('send', 'pageview');
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section>
      <div class="navbar navbar-default">
           <div class="container">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><img src="{{ asset('img/NiagaArt.png') }}" width="75px" height="75px"></a>
             </div>
             <div class="collapse navbar-collapse" id="mynavbar-content">
                <ul class="nav navbar-nav">
                   <li><a href="{{ route('home') }}">HOME</a></li>
                   <li><a href="{{ route('about') }}">ABOUT</a></li>
                   <li class="dropdown">
                     <a href="service.html" class="dropdown-toggle" data-toggle="dropdown">SERVICE<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                       <li class="dropdown">
                         <a href="catalogue.html" class="dropdown-toggle" data-toggle="dropdown">INTERIOR DESIGN<b class="caret"></b></a>
                         <ul class="dropdown-submenu">
                           <li><a href="{{ route('service', ['name' => 'home-living']) }}">HOME & LIVING</a></li>
                           <li><a href="{{ route('service', ['name' => 'apartment']) }}">APARTMENT</a></li>
                           <li><a href="{{ route('service', ['name' => 'cafe-foodcourt']) }}">CAFE & FOODCOURT</a></li>
                           <li><a href="{{ route('service', ['name' => 'shop-office']) }}">SHOP & OFFICE</a></li>
                         </ul>
                       </li>
                       <li class="divider"></li>
                       <li><a href="#">OTHER INTERIOR DESIGN SERVICES</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('projects') }}">PROJECTS</a></li>
                  <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                  <li><a href="{{ route('blog') }}">NEWS</a></li>
                </ul>
             </div>
           </div>
         </div>
    </section>

    @yield('content')

    <!-- Footer Section -->
   <footer>
     <div class="container">
          <div class="row">
               <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/NiagaArt.png') }}" width="100px" height="100px" alt="41logofooter">
               </div>
               <div class="service-ty col-md-3 col-sm-3">
               <h3>SERVICES</h3>
                    <a href="https://www.41studio.com/services#web-development" target="_blank">Services title 1</a>
                    <br>
                    <a href="https://www.41studio.com/services#mobile-development" target="_blank">Services title 2</a>
                    <br>
                    <a href="https://www.41studio.com/services#ui-ux-design" target="_blank">Services title 3</a>

               </div>
               <div class="office-add col-md-3 col-sm-3">
               <h3>OFFICE</h3>
                    <p>5th Building
                    <br>
                    Setra Mas Residence
                    <br>
                    Cimahi 40525
                    <br>
                    West Java - Indonesia</p>
               </div>
               <div class="contact-add col-md-3 col-sm-3">
               <h3>OFFICE</h3>
                    <p><a href="JavaScript:void(0)">hello@41studio.com</a></p>
                    <p>(+62)&nbsp;&nbsp;22&nbsp;&nbsp;8600&nbsp;&nbsp;1718
                    <br>
                    (+62)&nbsp;&nbsp;22&nbsp;&nbsp;2066&nbsp;&nbsp;0058</p>
               </div>
               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>
               <div class="col-md-6 col-sm-6">
                    <div class="footer-copyright">
                         <p>© 2017 NiagaArt | All Rights Reserved.</p>
                    </div>
               </div>
               <div class="col-md-6 col-sm-6">
                    <div class="social-icon">
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a>
                         &nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-instagram"></i></a>
                         &nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-skype"></i></a>
                         &nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a>
                         &nbsp;&nbsp;
                         <a href="JavaScript:void(0)" target="_blank"><i class="fa fa-google-plus-official"></i></a>
                    </div>
               </div>
          </div>
     </div>
   </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('niagaart/js/bootstrap.min.js') }}"></script>

    @yield('script')
  </body>
</html>
