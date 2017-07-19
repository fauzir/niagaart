@extends('layouts.blog')

@section('title')
All Post
@endsection

@section('content')
  <header class="intro-header" style="background-image: url({{ asset('img/bootstrap-mdo-sfmoma-02.jpg') }})">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="site-heading">
                      <h1>NiagaArt Blog</h1>
                      <hr class="small">
                      <span class="subheading">Blog on Software Engineering, Problem Solving,
Tutorial, People, Culture and many more...</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Main Content -->
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              @foreach ($blogs as $blog)
              <div class="post-preview">
                  <a href="{{ route('blog.content', ['id' => $blog->id]) }}">
                      <h2 class="post-title">
                          {{ $blog->title }}
                      </h2>
                      <h3 class="post-subtitle">
                          Blog preview text
                      </h3>
                  </a>
                  <p class="post-meta">Posted by <a href="#">{{ $blog->author }}</a> on {{ $blog->created_at }}</p>
              </div>
              @endforeach
              <hr>

              <!-- Pager -->
              <ul class="pager">
                  <li class="next">
                      {{ $blogs->links() }}
                  </li>
              </ul>
          </div>
      </div>
  </div>
@endsection
