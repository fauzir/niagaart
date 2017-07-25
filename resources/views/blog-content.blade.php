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
   </section>
            </div>
            <div class="container col-md-4 categories">
            <h3>CATEGORIES</h3>
              <div class="list-category">
                  <br>
                       <ul>
                         @foreach ($categories as $category)
                          <li id="tag"><a href="{{ route('blog.category', ['id' => $category->id]) }}" alt="tag Android">{{ $category->tag }} ({{ $count }})</a> </li>
                         @endforeach
                      </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
