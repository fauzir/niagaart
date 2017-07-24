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
                <h1>NIAGA ART BLOG</h1>
                <br>
                <p>Subtitle message are here</p>
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
                <div class="container col-md-8 article-main">
                @foreach ($blogs as $blog)
                <div class="container col-md-10 article">
                  <h2><a href="{{ route('blog.content', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h2>
                  <br>
                  <img src="{{ $blog->image }}" alt="article-thumbnail">
                  <br>
                  <p>{!! $blog->content !!} <a href="{{ route('blog.content', ['id' => $blog->id]) }}">Read More . . .</a></p>
                  <br>
                  <p><b>by {{ $blog->author }} on {{ $blog->created_at }}</b>
                  <br>
                  <b>On, Furniture, Livingroom, Family</b></p>
                  <hr>
                </div>
                @endforeach
                </div>
                <div class="container col-md-4">
                  <h2>POPULAR ARTICLE</h2>
                   <div class="container col-md-10 popular-article">
                      <h2><a href="blog-article.html">LOREM IPSUM BLOG TITLE HERE</a></h2>
                      <br>
                      <img src="./images/article-thumbnail.jpg" alt="article-thumbnail">
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="blog-article.html">Read More . . .</a></p>
                      <hr>
                  </div>
                                   <div class="container col-md-10 popular-article">
                      <h2><a href="blog-article.html">LOREM IPSUM BLOG TITLE HERE</a></h2>
                      <br>
                      <img src="./images/article-thumbnail.jpg" alt="article-thumbnail">
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="blog-article.html">Read More . . .</a></p>
                      <hr>
                  </div>
                  <div class="container col-md-10 popular-article">
                      <h2><a href="blog-article.html">LOREM IPSUM BLOG TITLE HERE</a></h2>
                      <br>
                      <img src="./images/article-thumbnail.jpg" alt="article-thumbnail">
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="blog-article.html">Read More . . .</a></p>
                      <hr>
                  </div>
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
                    <br>
            <div class="col-md-12">
              <div class="form-group contact-part">
                <p>GET IN TOUCH WITH US</p>
                <br>
                <a href="JavaScript:void(0)" class="btn btn-default btn-block btn-contact-us" alt="contact us">Contact Us</a>
                <br>
                <p>SUBSCRIBE OUR NEWSLETTER</p>
                <br>
                <a href="JavaScript:void(0)" class="btn btn-warning btn-block btn-RSS-FEED" alt="RSS FEED">RSS FEED</a>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
