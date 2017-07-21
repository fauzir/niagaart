@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
    <section>
      <div class="container sale-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="{{ asset('niagaart/images/Sale-Banner.jpg') }}" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="{{ asset('niagaart/images/Sale-Banner1.jpg') }}" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
              <img src="{{ asset('niagaart/images/Sale-Banner2.jpg') }}" alt="New york" style="width:100%;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <section>
      @foreach($homes as $home)
      <div class="container-fluid home-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-caption">
          <div class="row">
          <div class="container col-md-6"></div>
            <div class="container col-md-6 welcome-message">
              <h1>{{ $home->welcome_text }}</h1>
              <hr>
              <p>{{ $home->company_description }}</p>
            </div>
          </div>
        </div>
        @endforeach
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="{{ asset('niagaart/images/Home-Carousel.jpg') }}" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="{{ asset('niagaart/images/Home-Carousel1.jpg') }}" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
              <img src="{{ asset('niagaart/images/Home-Carousel.jpg') }}" alt="New york" style="width:100%;">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container service-section">
        <h2>OUR SERVICES</h2>
        <hr>
          <div class="row service-label">
          @foreach($products as $product)
          <div class="col-xs-4">
              <a href="#" class="thumbnail thumbnail-service">
                  <img src="{{ asset('niagaart/images/Service-label.jpg') }}">
                  <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <hr>
                    <p>{{ $product->description }}</p>
                    <hr>
                    <p>${{ $product->price }}</p>
                  </div>
              </a>
          </div>
          @endforeach
          {{-- <div class="col-xs-4">
              <a href="#" class="thumbnail thumbnail-service">
                  <img src="{{ asset('niagaart/images/Service-label.jpg') }}">
                  <div class="caption">
                    <h3>SERVICE TITLE</h3>
                    <hr>
                    <p>This is your service descrption here just put it good here</p>
                  </div>
              </a>
          </div>
          <div class="col-xs-4">
              <a href="#" class="thumbnail thumbnail-service">
                  <img src="{{ asset('niagaart/images/Service-label.jpg') }}">
                  <div class="caption">
                    <h3>SERVICE TITLE</h3>
                    <hr>
                    <p>This is your service descrption here just put it good here</p>
                  </div>
              </a>
          </div>
          <div class="col-xs-4">
              <a href="#" class="thumbnail thumbnail-service">
                  <img class="img-fluid" src="{{ asset('niagaart/images/Service-label.jpg') }}">
                  <div class="caption">
                    <h3>SERVICE TITLE</h3>
                    <hr>
                    <p>This is your service descrption here just put it good here</p>
                  </div>
              </a>
          </div> --}}
          </div>
          <br>
          <p>{{ $home->company_description }}</p>
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
            <div class="item active">
              <div class="row">
                <div class="col-xs-12">
                  <div class="thumbnail adjust1">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                      <div class="caption">
                        <h2>I can't wait to test this out.</h2>
                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                        <blockquote class="adjust2">
                          <b>Abhijit Goswami</b>
                            <small><cite title="Source Title">CEO Lorem Ipsum Group</cite></small>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-xs-12">
                  <div class="thumbnail adjust1">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                      <div class="caption">
                        <h2>I can't wait to test this out.</h2>
                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                        <blockquote class="adjust2">
                          <b>Abhijit Goswami</b>
                            <small><cite title="Source Title">CEO Lorem Ipsum Group</cite></small>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-xs-12">
                  <div class="thumbnail adjust1">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                      <div class="caption">
                        <h2>I can't wait to test this out.</h2>
                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                        <blockquote class="adjust2">
                          <b>Abhijit Goswami</b>
                            <small><cite title="Source Title">CEO Lorem Ipsum Group</cite></small>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
          <div class="container col-md-6">
          <h1>BLOG POSTS</h1>
          @foreach ($blogs as $blog)
          <div class="media">
            <div class="media-left">
              <div class="date"><h1>20</h1></div>
              <div class="month"><p>Jul</p></div>
            </div>
            <div class="media-body">
              <h1><a href="{{ route('blog.content', ['id' => $blog->id]) }}"></a>{{ $blog->title }}</h1>
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
          <div class="container col-md-6">
          <h1>WHAT'S NEW</h1>
        <a class="twitter-timeline" data-height="600" data-theme="light" data-link-color="#E81C4F" href="https://twitter.com/niaga_art">Tweets by niaga_art</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        </div>
        </div>
      </div>
    </section>
@endsection
