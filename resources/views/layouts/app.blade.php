<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NiagaArt | @yield('title')</title>
    <meta name="description" content="lorem ipsum dolor set amet" /> <!--Max 160 characters-->
    <meta name="keywords" content="keyword1, keyword2, keyword3" />
    <meta charset="utf-8" />

    <!--Responsive using bootstrap-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Le styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7lscpg0p7m2fqvhf6i5hiua3ha4nd3d9xyd7hf2qffaazouh"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <!--Google analytic-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-97258xxx-1', 'auto'); ga('send', 'pageview');
    </script>
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

    </div>

      <footer class="nb-footer">
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <div class="about">
        	<img src="img/logo-footer.png" class="img-responsive center-block img-footer" alt="">
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="footer-info-single">
        	<h2 class="title">Interior Design</h2>
        	<ul class="list-unstyled">
        		<li><a href="{{ route('service', ['name' => 'home-living']) }}" title=""><i class="fa fa-angle-double-right"></i> Home Living</a></li>
        		<li><a href="{{ route('service', ['name' => 'apartment']) }}" title=""><i class="fa fa-angle-double-right"></i> Apartment</a></li>
        		<li><a href="{{ route('service', ['name' => 'cafe-foodcourt']) }}" title=""><i class="fa fa-angle-double-right"></i> Cafe & FoodCourt</a></li>
        		<li><a href="{{ route('service', ['name' => 'shop-office']) }}" title=""><i class="fa fa-angle-double-right"></i> Shop / Office</a></li>
        	</ul>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="footer-info-single">
        	<h2 class="title">Other Interior</h2>
        	<ul class="list-unstyled">
        		<li><a href="{{ route('service', ['name' => 'flooring']) }}" title=""><i class="fa fa-angle-double-right"></i> Flooring</a></li>
        		<li><a href="{{ route('service', ['name' => 'blind']) }}" title=""><i class="fa fa-angle-double-right"></i> Blind</a></li>
        		<li><a href="{{ route('service', ['name' => 'wall-paper']) }}" title=""><i class="fa fa-angle-double-right"></i> Wall paper</a></li>
        		<li><a href="{{ route('service', ['name' => 'wall-clading']) }}" title=""><i class="fa fa-angle-double-right"></i> Wall Clading</a></li>
        		<li><a href="{{ route('service', ['name' => 'chair']) }}" title=""><i class="fa fa-angle-double-right"></i> Chair</a></li>
        	</ul>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="footer-info-single">
        	<h2 class="title">Products</h2>
        	<ul class="list-unstyled">
        		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Table</a></li>
        		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Chair</a></li>
        		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Wardrobe</a></li>
        	</ul>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="footer-info-single">
        	<h2 class="title">Contact</h2>
        	<p>Office Address at Jl. Sangkuriang no.43 Cimahi Utara, West Java, Indonesia (022) 878041654</p>

        </div>
        </div>
        </div>
        </div>

        <div class="col-sm-12">
        <div class="about">

        	<div class="social-media">
        		<ul class="list-inline">
        			<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
        			<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
        			<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
        			<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
        			<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
        		</ul>
        	</div>
        </div>
        </div>

        <section class="copyright">
        <div class="container">
        <div class="row">
        <div class="col-sm-6">
        <p>Copyright © 2017. NiagaArt.</p>
        </div>
        <div class="col-sm-6"></div>
        </div>
        </div>
        </section>
      </footer>

     <!-- /container -->

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
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script id="dsq-count-scr" src="//niagaart.disqus.com/count.js" async></script>
    <script>
      (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
      })(window, document, '_gscq','script','//widgets.getsitecontrol.com/95074/script.js');
    </script>

    @yield('script')

  </body>
</html>
