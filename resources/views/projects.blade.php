@extends('layouts.app')

@section('title')
Projects
@endsection

@section('content')
    <section>
    <div class="container">
      <h1>FEATURED PROJECTS</h1>
    </div>
          <div id="text-carousel" class="carousel slide featured-projects" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8">
            <div class="carousel-inner">
              @foreach($projects as $index => $project)
                <div class="item @if($index == 0) {{ 'active' }} @endif">
                    <div class="carousel-content">
                        <div class="container featured-projects">
                            <div class="row">
                              <div class="container col-md-6">
                                <h3>{{ $project->name }}</h3>
                                <br>
                                <p>{{ $project->description }}</p>
                              </div>
                              <div class="container col-md-6 opening-img">
                                <img src="{{ asset($project->image) }}" alt="Interior Design">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
                {{-- <div class="item active">
                    <div class="carousel-content">
                            <div class="container featured-projects">
                                <div class="row">
                                  <div class="container col-md-6">
                                    <h3>PROJECT TITLE HERE</h3>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                  </div>
                                  <div class="container col-md-6 opening-img">
                                    <img src="{{ asset('niagaart/images/Opening.jpg') }}" alt="Interior Design">
                                  </div>
                                </div>
                              </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div class="container featured-projects">
                                <div class="row">
                                  <div class="container col-md-6">
                                    <h3>PROJECT TITLE HERE</h3>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                  </div>
                                  <div class="container col-md-6 opening-img">
                                    <img src="{{ asset('niagaart/images/Opening.jpg') }}" alt="Interior Design">
                                  </div>
                                </div>
                              </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div class="container featured-projects">
                                <div class="row">
                                  <div class="container col-md-6">
                                    <h3>PROJECT TITLE HERE</h3>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                  </div>
                                  <div class="container col-md-6 opening-img">
                                    <img src="{{ asset('niagaart/images/Opening.jpg') }}" alt="Interior Design">
                                  </div>
                                </div>
                              </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
    </section>
<hr>
<section>
  <div class="container service-section">
    <h2>OUR SERVICES</h2>
    <hr>
      <div class="row service-label">
      @foreach($projects as $project)
      <div class="col-xs-4">
          <div class="thumbnail thumbnail-service project" data-toggle="modal" data-id="{{ $project->id }}" data-target="#myModal" href="#myModal">
              <img src="{{ asset($project->image) }}">
              <div class="caption">
                <h3>{{ $project->name }}</h3>
                <hr>
                <p>{{ $project->description }}</p>
              </div>
          </div>
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
    $(document).on("click", ".project", function () {
     var projectId = $(this).data('id');
           $.ajax({
              url: '/projects/item/' + projectId + '',
              type: "get",
              beforeSend: function() {
                $("#loading-image").show();
              },
              success: function(response){
                $('.modal-content').html(response)
                $('#myModal').modal('show');
                $("#loading-image").hide();
              },
              error: function(response){
                console.log('Error '+response);
              }
            });
      });
  </script>
@endsection
