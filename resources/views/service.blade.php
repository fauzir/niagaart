@extends('layouts.app')

@section('title')
<title>NiagaArt | Services</title>
@endsection

@section('content')
      <section>
         <div class="container-fluid header-catalogue">
         @foreach ($services as $service)
            <div class="container-fluid catalogue-head" style="background-image: url({{ asset($service->banner_image) }});">
               <div class="container catalogue-txt">
                  <div class="row">
                     <div class="container col-md-3 fill-in">
                     </div>
                     <div class="container col-md-8 catalogueheader-txt">
                        <h1>{{ $service->name }}</h1>
                        <br>
                        <p>{{ $service->tagline }}</p>
                     </div>
                     @endforeach
                  </div>
               </div>
               <section>
                  <div class="container sale-carousel">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           @foreach ($promos as $index => $promo)
                           <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="@if($index == 0) {{ 'active' }} @endif"></li>
                           @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           @foreach ($promos as $index => $promo)
                           <div class="item @if($index == 0) {{ 'active' }} @endif">
                              <img src="{{ asset('img/Sale-Banner1.jpg') }}" alt="{{ $promo->name }} | Niaga Art" style="width:100%;">
                              <div class="carousel-caption promo-text">
                                <h2>{{ $promo->sale }}</h2>
                                <p>{{ $promo->name }}</p>
                              </div>
                           </div>
                           @endforeach
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
            </div>
         </div>
      </section>
      <section>
         <div class="container service-sectioncatalogue">
         <h2>@lang('content.our-catalogue')</h2>
         <hr>
         @foreach($serviceitems->chunk(3) as $servicechunk)
         <div class="row service-label">
           @foreach($servicechunk as $serviceitem)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
               <a href="#" class="thumbnail thumbnail-service product" data-toggle="modal" data-id="{{ $serviceitem->id }}" title="{{ $serviceitem->name }} | Niaga Art" data-target="#myModal">
                  <img id="zoom_01" src="{{ asset($serviceitem->image) }}" class="imgZoom" style="height: 205px;" alt="{{ $serviceitem->name }} | Niaga Art" >
                  <div class="caption">
                     @if ( strlen($serviceitem->name) > 29 )
                       <h3>{{ substr($serviceitem->name, 0, 26) }}...</h3>
                     @else
                       <h3>{{ $serviceitem->name }}</h3>
                     @endif
                     <hr>
                     <div  style="min-height: 175px;">
                     {{-- @if ( $serviceitem->discount_price == 'none' )
                        <p>Rp. {{ $serviceitem->price }}</p>
                     @else
                        <p style="font-size: 15px; margin-bottom: 0px;"><strike>Rp. {{ $serviceitem->price }}</strike></p>
                        <p style="font-weight: bold;">Rp. {{ $serviceitem->discount_price }}</p>
                     @endif --}}
                     @if ( strlen($serviceitem->description) > 0 )
                        <p>{{ substr($serviceitem->description, 0, 150) }}</p>
                     @else
                        <p>@lang('content.no-desc')</p>
                     @endif
                     </div>
                  </div>
               </a>
            </div>
            @endforeach
         </div>
         @endforeach
         <br>
         <div class="container">
            <div class="row">
               <nav aria-label="Page navigation">
                  {!! PaginateRoute::renderPageList($serviceitems, $full = false, $class = 'pagination', $additionalLinks = true) !!}
               </nav>
            </div>
         </div>
         <div class="modal fade" id="myModal">
           <img id="loading-image" src="{{ asset('img/ajax-loader.gif') }}" alt="Loading | Niaga Art" style="display:none;"/>
        </div>
         </div>
      </section>
@endsection

@section('script')
    <script>
      $( document ).ready(function() {
          $( ".imgZoom" ).each(function(){
            $(this).elevateZoom({
              zoomWindowWidth: 300,
              zoomWindowHeight: 300,
              scrollZoom: true
            });
        });
      });
    </script>
@endsection
