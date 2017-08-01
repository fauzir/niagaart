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
                <div class="container col-md-10 article wow fadeInUp">
                  <h2><a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $blog->slug]) }}">{{ $blog->title }}</a></h2>
                  <br>
                  <img src="{{ $blog->image }}" alt="article-thumbnail">
                  <br>
                  <p>{!! substr($blog->content, 0, 150) !!} <a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $blog->slug]) }}">Read More . . .</a></p>
                  <br>
                  <p><b>by {{ $blog->author }} on {{ date_format($blog->created_at, 'd F Y') }}</b>
                  <br>
                  <b>On
                    @foreach ($blog->tag_blog as $index => $tag)
                    @if ($index == count($blog->tag_blog)-1)
                      <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}">{{ $tag->tag }}</a>
                    @else
                      <a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $tag->slug]) }}">{{ $tag->tag }}</a>,
                    @endif
                    @endforeach
                    </b></p>
                  <hr>
                </div>
                @endforeach
                {{ $blogs->links() }}
                </div>
                <div class="container col-md-4">
                  <h2>POPULAR ARTICLE</h2>
                  @foreach ($populars as $popular)
                   <div class="container col-md-10 popular-article">
                      <h2><a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $popular->slug]) }}">{{ $popular->title }}</a></h2>
                      <br>
                      <img src="{{ asset($popular->image) }}" alt="article-thumbnail">
                      <br>
                      <p>{!! substr($popular->content, 0, 150) !!} <a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $popular->slug]) }}">Read More . . .</a></p>
                      <hr>
                  </div>
                  @endforeach
                  <h3>CATEGORIES</h3>
                  <div class="list-category">
                    <br>
                         <ul>
                           @foreach ($categories as $category)
                            <li id="tag"><a href="{{ route('blog.category', ['locale' => request()->route()->locale, 'slug' => $category->slug]) }}" alt="tag Android">{{ $category->tag }} ({{ $category->total }})</a> </li>
                           @endforeach
                        </ul>
                    </div>
                    <br>
            <div class="col-md-12">
              <div class="form-group contact-part">
                <p>GET IN TOUCH WITH US</p>
                <br>
                <a href="{{ route('contact', ['locale' => 'en']) }}" class="btn btn-default btn-block btn-contact-us" alt="contact us">Contact Us</a>
                <br>
                <p>SUBSCRIBE OUR NEWSLETTER</p>
                <br>
                <a href="https://feeds.feedburner.com/NiagaArtBlog" class="btn btn-warning btn-block btn-RSS-FEED" alt="RSS FEED">RSS FEED</a>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
