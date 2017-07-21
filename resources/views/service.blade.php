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
                     <div class="container col-md-8 header-txt">
                        <h1>{{ $service->name }}</h1>
                        <br>
                        <p>{{ $service->description }}</p>
                     </div>
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
            </div>
         </div>
      </section>
      <section>
         <div class="container service-section">
         <h2>OUR CATALOGUE</h2>
         <hr>
         <div class="row service-label">
           @foreach($products as $product)
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="{{ asset('niagaart/images/Service-label.jpg') }}">
                  <div class="caption">
                     <h3>{{ $product->name }}</h3>
                     <hr>
                     <p>{{ $product->description }}</p>
                  </div>
               </a>
            </div>
            @endforeach
            {{-- <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img class="img-fluid" src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
         </div>
         <div class="row service-label">
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img class="img-fluid" src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
         </div>
         <div class="row service-label">
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div>
            <div class="col-xs-4">
               <a href="#" class="thumbnail thumbnail-service" data-toggle="modal" data-target="#myModal">
                  <img class="img-fluid" src="./images/Service label.jpg">
                  <div class="caption">
                     <h3>SERVICE TITLE</h3>
                     <hr>
                     <p>This is your service descrption here just put it good here</p>
                  </div>
               </a>
            </div> --}}
         </div>
         {{-- <br>
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
         </div> --}}
         <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">ITEM TITLE HERE</h2>
                <p>Subtitle is also here for sure</p>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <div class="row">
                  <img src="{{ asset('niagaart/images/popup-item.jpg') }}">
                  <br>
                  <div class="container col-md-8">
                    <h2>DESCRIPTION ARE HERE</h2>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia</p>
                  </div>
                  <div class="container col-md-4">
                    <h2>DETAIL ARE HERE</h2>
                    <br>
                    <p>JL. Sangkuriang No 43
                    Cimahi Utara Jawa Barat
                    Indonesia</p>
                    <br>
                    <p>Phone : (022) 87800639</p>
                    <br>
                    <p>Message/Whatsapp : 0878-2454-2982</p>
                    <br>
                    <p>email : niagac7@gmail.com</p>
                    <br>
                    <p>Mon - Fri : 08:00 - 16:00</p>
                    <br>
                    <p>Sat - Sun : 09:00 - 15:00</p>
                  </div>
                  <br>
                  <div class="gal">

  <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

    <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

      <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

      <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">



      <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

      <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""><img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
          <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

            <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

  </div>
              </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
            </div>
        </div>
        </div>
        </div>
         </div>
      </section>
@endsection
