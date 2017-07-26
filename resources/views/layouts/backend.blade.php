<!DOCTYPE html>
<html lang="en">
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
            <nav id="sidebar">
                <div class="sidebar-header">
                  <a href="{{ url('/admin') }}">
                    <h3>NiagaArt</h3>
                    <strong><img src="{{ asset('img/logo-round.png') }}" height="38px" alt="41logofooter"></strong>
                  </a>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn btn-danger">
                            <i class="glyphicon glyphicon-th"></i>
                        </button>
                    </li>
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
                            <li><a href="{{ route('service.index') }}">Services</a></li>
                            <li><a href="{{ route('product.index') }}">Product</a></li>
                            <li><a href="{{ route('projects.index') }}">Projects</a></li>
                            <li><a href="{{ route('project-item.index') }}">Project Items</a></li>
                            <li><a href="{{ route('promotion.index') }}">Promotions</a></li>
                            <li><a href="{{ route('testimony.index') }}">Testimony</a></li>
                        </ul>
                        <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-pencil"></i>
                            Blog
                        </a>
                        <ul class="collapse list-unstyled" id="blogSubmenu">
                            <li><a href="{{ route('blog.index') }}">Post</a></li>
                            <li><a href="{{ route('blog-category.index') }}">Category</a></li>
                            <li><a href="{{ route('blog-tag.index') }}">Tag</a></li>
                        </ul>
                        <a href="#usersSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Users
                        </a>
                        <ul class="collapse list-unstyled" id="usersSubmenu">
                            <li><a href="{{ route('users.index') }}">Users</a></li>
                            <li><a href="{{ route('roles.index') }}">Roles</a></li>
                            <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="glyphicon glyphicon-link"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebar').toggleClass('active');
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

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
                 $(this).collapse('hide');
             }
         </script>
    </body>
</html>
