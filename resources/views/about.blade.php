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
            <div class="container col-md-6">
              <h1>{{ $about->opening_title }}</h1>
              <br>
              <p>{{ $about->opening_text }}</p>
            </div>
            <div class="container col-md-6 opening-img wow fadeInUp">
              <img src="{{ asset($about->opening_image) }}" alt="About | Niaga Art">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container separator-text">
        <h2>@lang('content.what-we-brought')</h2>
        <hr>
      </div>
      @foreach ($interiors as $interior)
      @if ($interior->id % 2 == 1)
        <div class="container service-scope1">
          <div class="row">
            <div class="container col-md-6 scope-img1 wow fadeInLeft">
              <img src="{{ asset($interior->image) }}" width="100%" alt="{{ $interior->name }} | Niaga Art">
            </div>
            <div class="container col-md-6">
              <h3>{{ $interior->name }}</h3>
              <br>
              <p>{{ $interior->description }}</p>
            </div>
          </div>
        </div>
        <hr>
      @else
        <div class="container service-scope2 hidden-sm hidden-xs">
          <div class="row">
            <div class="container col-md-6">
              <h3>{{ $interior->name }}</h3>
              <br>
              <p>{{ $interior->description }}</p>
            </div>
            <div class="container col-md-6 scope-img2 wow fadeInRight">
              <img src="{{ asset($interior->image) }}" width="100%" alt="{{ $interior->name }} | Niaga Art">
            </div>
          </div>
        </div>
      @endif
      @endforeach
    </section>
    <section>
      <div class="container separator-text">
        <h2>INSTAGRAM</h2>
        <hr>
        <!-- LightWidget WIDGET -->
        <script src="//lightwidget.com/widgets/lightwidget.js"></script>
        <iframe src="//lightwidget.com/widgets/e4a242cd151c5057b1fe36804c4813fd.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
      </div>
    </section>
@endsection
