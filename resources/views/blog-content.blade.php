@extends('layouts.blog')

@section('title')
All Post
@endsection

@section('content')
  @foreach ($contents as $content)
  <section>
    <div class="container-fluid header-blog">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="container col-md-3 fill-in">

            </div>
            <div class="container col-md-8 blogheader-txt wow fadeInUp">
              <h1>{{ $content->title }}</h1>
              <br>
              <p>@lang('content.by') {{ $content->author }} @lang('content.on') {{ date_format($content->created_at, 'd F Y') }}</p>
              <p>@lang('content.on') :
                @foreach ($content->tag_blog as $index => $tag)
                @if ($index == count($content->tag_blog)-1)
                  <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}" title="{{ $tag->tag }} | Niaga Art">{{ $tag->tag }}</a>
                @else
                  <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}" title="{{ $tag->tag }} | Niaga Art">{{ $tag->tag }}</a>,
                @endif
                @endforeach
              </p>
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
              <img src="{{ asset($content->image) }}" alt="{{ $content->title }} | Niaga Art Blog">
            </div>
            <div class="col-md-6"></div>
              {!! $content->content !!}
            <hr>
            <a href="{{ route('blog', ['locale' => 'en']) }}" title="Blog | Niaga Art"><b><< @lang('content.back-to-blog')</b></a>

            <br>
            <br>
            <div class="container col-md-8 comment-section">
            <section>
              @if ($content->comment == "yes")
                <br>
                <div id="disqus_thread">
                <script src="https://niagaart.disqus.com/embed.js" data-timestamp="new Date()"></script></div>
              @else
                <br>
                <h4 align="center">no comment section in this article.</h4>
              @endif
   </section>
   @endforeach
   <section>
            </div>
            <div class="container col-md-4 categories">
            <h3>@lang('content.categories')</h3>
              <div class="list-category">
                  <br>
                       <ul>
                         @foreach ($categories as $category)
                          <li id="tag"><a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $category->slug]) }}" title="{{ $category->tag }} | Niaga Art">{{ $category->tag }} ({{ $category->total }})</a> </li>
                         @endforeach
                      </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
@endsection
