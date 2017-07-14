@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
  <hr>
  @foreach($homes as $home)
  <img src="{{ $home->image }}" width="100%" alt="">
  <div class="jumbotron">
    <h1>Welcome</h1>
    <h2>Niaga Art Official Site</h2>
    <p class="lead">{{ $home->welcome_text }}</p>
  </div>
  @endforeach

  <hr>

  <h2 align="center">Our Services</h2><br>

  <div class="row">
    @foreach($products as $product)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ $product->image }}" alt="...">
        <div class="caption">
          <h5 align="center"><strong>{{ $product->name }}</strong></h5>
          <p align="center">{{ $product->description }}</p>
          <p align="center"><strong>$ {{ $product->price }}</strong></p>
        </div>
      </div>
    </div>
    @endforeach

  </div>

  <p align="center">{{ $home->company_description }}</p>

  <hr>

  <div class="row-fluid marketing">
    <div class="span6">
      <h4>Subheading</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

      <h4>Subheading</h4>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

      <h4>Subheading</h4>
      <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>

    <div class="span6">
      <h4>Subheading</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

      <h4>Subheading</h4>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

      <h4>Subheading</h4>
      <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>
  </div>

  <hr>
@endsection
