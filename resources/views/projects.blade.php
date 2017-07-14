@extends('layouts.app')

@section('title')
projects
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

  <h2 align="center">Our Services</h2><br>

  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ URL::to('img/static-services.jpg') }}" alt="...">
        <div class="caption">
          <h5 align="center"><strong>SERVICE TITLE HERE</strong></h5>
          <p align="center">Service description here</p>
          <p align="center"><strong>Price here</strong></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ URL::to('img/static-services.jpg') }}" alt="...">
        <div class="caption">
          <h5 align="center"><strong>SERVICE TITLE HERE</strong></h5>
          <p align="center">Service description here</p>
          <p align="center"><strong>Price here</strong></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ URL::to('img/static-services.jpg') }}" alt="...">
        <div class="caption">
          <h5 align="center"><strong>SERVICE TITLE HERE</strong></h5>
          <p align="center">Service description here</p>
          <p align="center"><strong>Price here</strong></p>
        </div>
      </div>
    </div>

  </div>

  <hr>
@endsection
