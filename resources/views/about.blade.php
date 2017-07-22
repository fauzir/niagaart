@extends('layouts.app')

@section('title')
About
@endsection

@section('content')
    <section>
      <div class="container">
        <div class="hero-image">
        </div>
      </div>
    </section>
    <section>
    <div class="container-fluid opening-bg">
      <div class="container opening-section">
          <div class="row">
            @foreach($abouts as $about)
            <div class="container col-md-6">
              <h1>{{ $about->opening_title }}</h1>
              <br>
              <p>{{ $about->opening_text }}</p>
            </div>
            <div class="container col-md-6 opening-img">
              <img src="{{ asset($about->opening_image) }}" alt="Interior Design">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container separator">
        <h2>WHAT WE'VE BROUGHT FOR YOU</h2>
      </div>
      @foreach ($interiors as $interior)
      @if ($interior->id % 2 == 1)
        <div class="container service-scope1">
          <div class="row">
            <div class="container col-md-6 scope-img1">
              <img src="{{ asset($interior->image) }}" height="300px" alt="Interior Design">
            </div>
            <div class="container col-md-6">
              <h3>{{ $interior->name }}</h3>
              <br>
              <p>{{ $interior->description }}</p>
            </div>
          </div>
        </div>
        <hr width="50%">
      @else
        <div class="container service-scope2">
          <div class="row">
            <div class="container col-md-6">
              <h3>{{ $interior->name }}</h3>
              <br>
              <p>{{ $interior->description }}</p>
            </div>
            <div class="container col-md-6 scope-img2">
              <img src="{{ asset($interior->image) }}" height="300px" alt="Interior Design">
            </div>
          </div>
        </div>
      @endif
      @endforeach
    </section>
@endsection
