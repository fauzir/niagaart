@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
    {{ Counter::count('home') }}
    <section>
      <div class="swiper-container">
              <div class="swiper-wrapper">
                  @foreach ($promos as $promo)
                  <div class="swiper-slide {{ $promo->class }}">
                     <div>
                        <h1>{{ $promo->sale }}</h1>
                        <p>{{ $promo->name }}</p>
                     </div>
                  </div>
                  @endforeach
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
    </section>

    <section>
      <div class="container-fluid home-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-caption">
          <div class="row">
          <div class="container col-md-6"></div>
            <div class="container col-lg-6 col-md-12 col-sm-12 welcome-message hidden-xs">
              <h1 class="animated fadeInUp">@lang('content.welcome')</h1>
              <hr>
              <p class="animated fadeInUp">{{ $home->welcome_text }}</p>
            </div>
            <div class="container col-lg-6 col-md-12 col-sm-12 welcome-message visible-xs">
              <h1>@lang('content.welcome')</h1>
              <hr>
            </div>
          </div>
        </div>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active">
                 <img src="{{ asset('frontend/images/Home-Carousel.jpg') }}" alt="Home Carousel 1 | Niaga Art" style="width:100%;">
              </div>
              <div class="item">
                 <img src="{{ asset('frontend/images/Home-Carousel1.jpg') }}" alt="Home Carousel 2 | Niaga Art" style="width:100%;">
              </div>
              <div class="item">
                 <img src="{{ asset('frontend/images/Home-Carousel.jpg') }}" alt="Home Carousel 3 | Niaga Art" style="width:100%;">
              </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container service-section">
        <h2>@lang('content.our-services')</h2>
        <hr>
          <div class="row service-label">
          @foreach($services as $service)
          <div class="col-xs-12 col-sm-6 col-md-4">
              <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" class="thumbnail thumbnail-service wow fadeInRight">
                  <img src="{{ asset($service->image) }}" style="height: 205px;" alt="{{ $service->name }} | Niaga Art">
                  <div class="caption">
                    <h3>{{ $service->name }}</h3>
                    <hr>
                    <p style="min-height: 175px;">{{ substr($service->description, 0, 150) }}</p>
                  </div>
              </a>
          </div>
          @endforeach
          </div>
          <br>
          <p>{!! $home->company_description !!}</p>
      </div>
    </section>
    <section>
      <div class="container content">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
            </li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            @foreach ($testimonies as $index => $testimony)
            <div class="item @if($index == 0) {{ 'active' }} @endif">
              <div class="row">
                <div class="col-xs-12">
                  <div class="thumbnail adjust1">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <img class="media-object img-rounded img-responsive" src="{{ asset($testimony->image) }}" alt="Testimony {{ $testimony->name }} | Niaga Art" >
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                      <div class="caption">
                        <h2>{{ $testimony->subject }}</h2>
                        <p>{{ $testimony->testimony }}</p>
                        <blockquote class="adjust2">
                          <b>{{ $testimony->name }}</b>
                            <small><cite title="Source Title">{{ $testimony->occupation }}</cite></small>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>
    <hr>
    <section>
      <div class="container newsfeed">
        <div class="row">
          <div class="container col-md-6 wow fadeInUp">
          <h2>BLOG POSTS</h2>
          @foreach ($blogs as $blog)
          <div class="media">
            <div class="media-left">
              <div class="date">
                 <h1>{{ date_format($blog->created_at, 'd') }}</h1>
              </div>
              <div class="month">
                 <p>{{ date_format($blog->created_at, 'M') }}</p>
              </div>
            </div>
            <div class="media-body article-showcase">
              <h2><a href="{{ route('blog.content', ['locale' => request()->route()->locale, 'slug' => $blog->slug]) }}">{{ $blog->title }}</a></h2>
              <p>{{ $blog->author }}</p>
            </div>
          </div>
          @endforeach
          {{-- <div class="media">
            <div class="media-left">
              <div class="date"><h1>20</h1></div>
              <div class="month"><p>Jul</p></div>
            </div>
            <div class="media-body">
              <h1>Your Blog Title Here</h1>
              <p>Here is your blog subtitle and short explanation here</p>
              </div>
            </div> --}}
          </div>
          <div class="container col-md-6 wow fadeInUp">
          <h2>WHAT'S NEW</h2>
        <a class="twitter-timeline" data-height="600" data-theme="light" data-chrome="nofooter" data-link-color="#E81C4F" href="https://twitter.com/niaga_art">Tweets by niaga_art</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        </div>
        </div>
    </section>
@endsection
