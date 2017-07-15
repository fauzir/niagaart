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
      <h1>Blog Post</h1>

      <hr>

      @foreach ($blogs as $blog)
      <h3><a href="{{ route('blog.content', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
      <p>{{ $blog->author }}</p>
      @endforeach
    </div>

    <div class="span6">
      <h1>What's Going on</h1>

      <hr>

      <a class="twitter-timeline" data-width="500" data-height="500" data-theme="light" href="https://twitter.com/41studio">Tweets by 41studio</a>
    </div>
  </div>

  <hr>
@endsection
