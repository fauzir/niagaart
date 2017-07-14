@extends('layouts.app')

@section('title')
Service
@endsection

@section('content')
  <hr>
    <img src="{{ $service->image }}" width="100%" alt="">
    <div class="jumbotron">
      <h1>{{ $service->name }}</h1>
      <p class="lead">{{ $service->description }}</p>
    </div>
  <hr>

  <h2 align="center">Our Catalogue</h2><br>

  <div class="row">
    @foreach($products as $product)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ $product->image }}" alt="...">
        <div class="caption">
          <h5 align="center"><strong>{{ $product->name }}</strong></h5>
          <p align="center">{{ $product->description }}</p>
          <p align="center"><strong>{{ $product->price }}</strong></p>
        </div>
      </div>
    </div>
    @endforeach

  </div>

  <hr>
@endsection
