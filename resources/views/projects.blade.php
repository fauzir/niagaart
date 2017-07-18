@extends('layouts.app')

@section('title')
Projects
@endsection

@section('content')
  <hr>
  <!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($projects as $index => $project)
      <div class="item @if($index == 0) {{ 'active' }} @endif">
          <img src="{{ $project->image }}" alt="">
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
</div><!-- /.carousel -->

  <hr>

  <h2 align="center">Portofolios</h2><br>

  <div class="row">
    @foreach($projects as $project)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail project" data-toggle="modal" data-id="{{ $project->id }}" href="#myModal">
        <img src="{{ $project->image }}" width="275" height="275" alt="...">
        <div class="caption">
          <h5 align="center"><strong>{{ $project->name }}</strong></h5>
        </div>
      </div>
    </div>
    @endforeach
  </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Name</h4>
      </div>
        <div class="modal-body">

        </div>
    </div>

  <hr>

@endsection

@section('script')
  <script type="text/javascript">
    // $(document).ready(function(){
    //   $("#button").click(function(){
    //      var id = $(this).data('id');
    //      $("#myModal").modal({
    //        show: true
    //      });
    //   });
    // });
    $(document).on("click", ".project", function () {
     var projectId = $(this).data('id');
           $.ajax({
              url: '/projects/item/' + projectId + '',
              type: "get",
              success: function(response){
                $('.modal-body').html(response)
                $('#myModal').modal('show');
              },
              error: function(response){
                console.log('Error '+response);
              }
            });
      });
  </script>
@endsection
