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
              <div class="container col-md-8 catalogueheader-txt wow fadeInUp">
                <h1>NIAGA ART BLOG</h1>
                <br>
                <p>@lang('content.subtitle-here')</p>
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
                <div class="container col-md-10 article wow fadeInUp">
                  <h2><a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $blog->slug]) }}" title="{{ $blog->title }} | Niaga Art Blog">{{ $blog->title }}</a></h2>
                  <br>
                  <img src="{{ $blog->image }}" alt="{{ $blog->title }} | Niaga Art Blog">
                  <br>
                  <p>{!! substr($blog->content, 0, 150) !!} <a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $blog->slug]) }}" title="{{ $blog->title }} | Niaga Art">@lang('content.read-more')</a></p>
                  <br>
                  <p><b>@lang('content.by') {{ $blog->author }} @lang('content.on') {{ date_format($blog->created_at, 'd F Y') }}</b>
                  <br>
                  <b>@lang('content.on-2')
                    @foreach ($blog->tag_blog as $index => $tag)
                    @if ($index == count($blog->tag_blog)-1)
                      <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}" title="{{ $tag->tag }} | Niaga Art">{{ $tag->tag }}</a>
                    @else
                      <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}" title="{{ $tag->tag }} | Niaga Art">{{ $tag->tag }}</a>,
                    @endif
                    @endforeach
                    </b></p>
                  <hr>
                </div>
                @endforeach
                {{ $blogs->links() }}
                </div>
                <div class="container col-md-4">
                  <h2>@lang('content.popular-article')</h2>
                  @foreach ($populars as $popular)
                   <div class="container col-md-10 popular-article">
                      <h2><a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $popular->slug]) }}" title="{{ $popular->title }} | Niaga Art">{{ $popular->title }}</a></h2>
                      <br>
                      <img src="{{ asset($popular->image) }}" alt="{{ $popular->title }} | Niaga Art Blog">
                      <br>
                      <p>{!! substr($popular->content, 0, 150) !!} <a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $popular->slug]) }}" title="{{ $populer->title }} | Niaga Art">@lang('content.read-more')</a></p>
                      <hr>
                  </div>
                  @endforeach
                  <h3>@lang('content.categories')</h3>
                  <div class="list-category">
                    <br>
                         <ul>
                           @foreach ($categories as $category)
                            <li id="tag"><a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $category->slug]) }}">{{ $category->tag }} ({{ $category->total }})</a> </li>
                           @endforeach
                        </ul>
                    </div>
                    <br>
            <div class="col-md-12">
              <div class="form-group contact-part">
                <p>@lang('content.get-in-touch')</p>
                <br>
                <a href="{{ route('contact', ['locale' => 'en']) }}" title="Contact | Niaga Art" class="btn btn-default btn-block btn-contact-us">@lang('content.contact-us-2')</a>
                <br>
                <p>@lang('content.subscribe')</p>
                <br>
                <a href="https://feeds.feedburner.com/NiagaArtBlog" title="Feeds | Niaga Art" class="btn btn-warning btn-block btn-RSS-FEED">RSS FEED</a>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
