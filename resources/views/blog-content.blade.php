@extends('layouts.blog')

@section('title')
All Post
@endsection

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url({{ asset($content->image) }})">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="site-heading">
                      <h1>{{ $content->title }}</h1>
                      <hr class="small">
                      <span class="subheading">by {{ $content->author }} on {{ $content->created_at }}</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Post Content -->
  <article>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <p>{!! $content->content !!}</p>
                  <div id="disqus_thread"></div>
              </div>
          </div>
      </div>
  </article>
@endsection
