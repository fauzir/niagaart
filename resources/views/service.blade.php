@extends('layouts.app')

@section('title')
Services
@endsection

@section('content')
      <section>
         <div class="container-fluid header-catalogue">
            <div class="container-fluid catalogue-head">
               <div class="container catalogue-txt">
                  <div class="row">
                     <div class="container col-md-3 fill-in">
                     </div>
                     @foreach ($services as $service)
                     <div class="container col-md-8 catalogueheader-txt">
                        <h1>{{ $service->name }}</h1>
                        <br>
                        <p>{{ $service->description }}</p>
                     </div>
                     @endforeach
                  </div>
               </div>
               <section>
                  <div class="container sale-carousel">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                           <li data-target="#myCarousel" data-slide-to="2"></li>
                           <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img src="{{ asset('frontend/images/Sale-Banner1.jpg') }}" alt="Los Angeles" style="width:100%;">
                              <div class="carousel-caption">
                                <h1>{{ $promo1->sale }}</h1>
                                <p>{{ $promo1->name }}</p>
                              </div>
                           </div>
                           <div class="item">
                              <img src="{{ asset('frontend/images/Sale-Banner2.jpg') }}" alt="Chicago" style="width:100%;">
                              <div class="carousel-caption">
                                <h1>{{ $promo2->sale }}</h1>
                                <p>{{ $promo2->name }}</p>
                              </div>
                           </div>
                           <div class="item">
                              <img src="{{ asset('frontend/images/Sale-Banner3.jpg') }}" alt="New york" style="width:100%;">
                              <div class="carousel-caption">
                                <h1>{{ $promo3->sale }}</h1>
                                <p>{{ $promo3->name }}</p>
                              </div>
                           </div>
                           <div class="item">
                              <img src="{{ asset('frontend/images/Sale-Banner4.jpg') }}" alt="New york" style="width:100%;">
                              <div class="carousel-caption">
                                <h1>{{ $promo4->sale }}</h1>
                                <p>{{ $promo4->name }}</p>
                              </div>
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
            </div>
         </div>
      </section>
      <section>
         <div class="container service-sectioncatalogue">
         <h2>OUR CATALOGUE</h2>
         <hr>
         <div class="row service-label">
           @foreach($products as $product)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
               <a href="#" class="thumbnail thumbnail-service product" data-toggle="modal" data-id="{{ $product->id }}" data-target="#myModal">
                  <img src="{{ asset($product->image) }}">
                  <div class="caption">
                     <h3>{{ $product->name }}</h3>
                     <hr>
                     <p>{{ substr($product->description, 0, 150) }}</p>
                  </div>
               </a>
            </div>
            @endforeach
         </div>
         <br>
         <div class="container">
            <div class="row">
               <nav aria-label="Page navigation">
                  <ul class="pagination">
                     <li>
                        <a href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        </a>
                     </li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li>
                        <a href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">

        </div>
        </div>
        </div>
         </div>
      </section>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).on("click", ".product", function () {
     var productId = $(this).data('id');
           $.ajax({
              url: '/product/item/' + productId + '',
              type: "get",
              success: function(response){
                $('.modal-content').html(response)
                $('#myModal').modal('show');
              },
              error: function(response){
                console.log('Error '+response);
              }
            });
      });
  </script>
@endsection
