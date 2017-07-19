<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NiagaArt | Admin Page</title>

        <meta name="description" content="lorem ipsum dolor set amet" /> <!--Max 160 characters-->
        <meta name="keywords" content="keyword1, keyword2, keyword3" />
        <meta charset="utf-8" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <body>
      <div id="main" style="margin-left: 0px; padding-top: 0px; padding-left: 0px; padding-right: 0px;">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          {{-- <img src="{{ asset('img/NiagaArt.png') }}" width="150px" height="150px" alt=""> --}}
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
            <a href="{{ route('blog.index') }}">Post</a>
            <a href="{{ route('blog-category.index') }}">Category</a>
            <a href="{{ route('blog-tag.index') }}">Tag</a>
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
          <a href="javascript:void(0)" class="navbar-brand navbar-open" name="nav-button" onclick="openNav()"><strong>-</strong></a>
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
        /*
        Copywrite Square Bracket LLC - Sean Clark 2012-3012
        http://square-bracket.com
        http://connect.ai
        http://youtube.com/optikalefxx
        */
        (function($) {
        $.fn.tags = function(opts) {
                var selector = this.selector;
                //console.log("selector",selector);
                // updates the original input
                function update($original) {
                        var all = [];
                        var list = $original.closest(".tags-wrapper").find("li.tag span").each(function() {
                                all.push($(this).text());
                        });
                        all = all.join(",");
                        $original.val(all);
                }

                return this.each(function() {
                        var self = this,
                                $self = $(this),
                                $wrapper = $("<div class='tags-wrapper'><ul></ul></div");
                                tags = $self.val(),
                                tagsArray = tags.split(","),
                                $ul = $wrapper.find("ul");



                        // make sure have opts
                        if(!opts) opts = {};
                        opts.maxSize = 50;

                        // add tags to start
                        tagsArray.forEach(function(tag) {
                                if(tag) {
                                        $ul.append("<li class='tag'><span>"+tag+"</span><a href='#' class='glyphicon glyphicon-remove'></a></li>");
                                }
                        });


                        // get classes on this element
                        if(opts.classList) $wrapper.addClass(opts.classList);

                        // add input
                        $ul.append("<li class='tags-input'><input type='text' class='tags-secret'/></li>");
                        // set to dom
                        $self.after($wrapper);
                        // add the old element
                        $wrapper.append($self);

                        // size the text
                        var $input = $ul.find("input"),
                                size = parseInt($input.css("font-size"))-4;

                        // delete a tag
                        $wrapper.on("click","li.tag a",function(e) {
                                e.preventDefault();
                                $(this).closest("li").remove();
                                $self.trigger("tagRemove",$(this).closest("li").find("span").text());
                                update($self);
                        });

                        // backspace needs to check before keyup
                        $wrapper.on("keydown","li input",function(e) {
                                // backspace
                                if(e.keyCode == 8 && !$input.val()) {
                                        var $li = $ul.find("li.tag:last").remove();
                                        update($self);
                                        $self.trigger("tagRemove",$li.find("span").text());
                                }
                                // prevent for tab
                                if(e.keyCode == 9) {
                                        e.preventDefault();
                                }

                        });

                        // as we type
                        $wrapper.on("keyup","li input",function(e) {
                                e.preventDefault();
                                $ul = $wrapper.find("ul");
                                var $next = $input.next(),
                                        usingAutoFill = $next.hasClass("autofill-bg"),
                                        $inputLi = $ul.find("li.tags-input");

                                // regular size adjust
                                $input.width($input.val().length * (size) );

                                // if combined with autofill, check the bg for size
                                if(usingAutoFill) {
                                        $next.width($next.val().length * (size) );
                                        $input.width($next.val().length * (size) );
                                        // make sure autofill doesn't get too big
                                        if($next.width() < opts.maxSize) $next.width(opts.maxSize);
                                        var list = $next.data().data;
                                }

                                // make sure we don't get too high
                                if($input.width() < opts.maxSize) $input.width(opts.maxSize);

                                // tab, comma, enter
                                if(!!~[9,188,13].indexOf(e.keyCode)) {
                                        var val = $input.val().replace(",","");
                                        var otherCheck = true;

                                        // requring a tag to be in autofill
                                        if(opts.requireData && usingAutoFill) {
                                                if(!~list.indexOf(val)) {
                                                        otherCheck = false;
                                                        $input.val("");
                                                }
                                        }

                                        // unique
                                        if(opts.unique) {
                                                // found a match already there
                                                if(!!~$self.val().split(",").indexOf(val)) {
                                                        otherCheck = false;
                                                        $input.val("");
                                                        $next.val("");
                                                }
                                        }

                                        // max tags
                                        if(opts.maxTags) {
                                                if($self.val().split(",").length == opts.maxTags) {
                                                        otherCheck = false;
                                                        $input.val("");
                                                        $next.val("");
                                                }
                                        }

                                        // if we have a value, and other checks pass, add the tag
                                        if(val && otherCheck) {
                                                // place the new tag
                                                $inputLi.before("<li class='tag'><span>"+val+"</span><a href='#' class='glyphicon glyphicon-remove'></a></li>");
                                                // clear the values
                                                $input.val("");
                                                if(usingAutoFill) $next.val("");
                                                update($self);
                                                $self.trigger("tagAdd",val);
                                        }
                                }

                        });

                });
        }
        })(jQuery);
        $(function() {
                                $("#taginput").tags({
                                        unique: true,
                                        maxTags: 5
                                });
                        });

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
