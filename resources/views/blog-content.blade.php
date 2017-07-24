@extends('layouts.blog')

@section('title')
All Post
@endsection

@section('content')
  <section>
    <div class="container-fluid header-blog">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="container col-md-3 fill-in">

            </div>
            <div class="container col-md-8 catalogueheader-txt">
              <h1>{{ $content->title }}</h1>
              <br>
              <p>by {{ $content->author }} on {{ $content->created_at }}</p>
              <p>on : Marketing, Interior, Home and Living</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <section>
      <div class="container-fluid blog-content">
        <div class="container">
          <div class="container blog-article-area">
            <div class="row">
            <div class="col-md-6 article-fullpict">
              <img src="{{ asset($content->image) }}" alt="article-fullpict">
            </div>
            <div class="col-md-6">
              <p>{!! $content->content !!}</p>
            <hr>
            </div>
            <br>
            <div class="container col-md-8 comment-section">
            <section>
              <div id="disqus_thread"></div>
         {{-- <div class="panel panel-warning panel-default">
       <div class="panel-heading">
         ATTENTION
       </div>
       <div class="panel-body">
         Comments are here . . .
       </div>
       <div class="panel-footer">
         <a href="#" class="btn btn-success btn-sm">Agree</a>
         <a href="#" class="btn btn-danger btn-sm">Decline</a>
       </div>
     </div>
         <div class="media">
           <a class="pull-left" href="#">
              <img class="media-object" src="./image/Cat.jpg" alt="Cat-profile">
           </a>
           <div class="media-body">
             <h4 class="media-heading">Awesome piece of work!</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
             <hr>
             <div class="media">
           <a class="pull-left" href="#">
              <img class="media-object" src="./image/Got-Ideas-Icon.png" alt="PeopleIcon">
           </a>
           <div class="media-body">
             <h4 class="media-heading">Awesome piece of work!</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
             <hr>
           </div>
         </div>
           </div>
         </div> --}}
   </section>
            </div>
            <div class="container col-md-4 categories">
            <h3>CATEGORIES</h3>
              <div class="list-category">
                  <br>
                       <ul>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag Android">android (2)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag Angular">Angular (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag Angular4">Angular4 (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag API">API (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag Array">Array (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag back-end-web-development">back-end-web-development (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag bootstrap">boostrap (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="tag boostrap4">boostrap4 (1)</a> </li>
                          <li id="tag"><a href="JavaScript:void(0)" alt="Boss">Boss (1)</a> </li>
                      </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
