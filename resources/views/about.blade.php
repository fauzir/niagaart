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
      <div class="container service-scope1">
        <div class="row">
          <div class="container col-md-6 scope-img1">
            <img src="./images/service-scope1.jpg" alt="Interior Design">
          </div>
          <div class="container col-md-6">
            <h3>SERVICE TITLE 1</h3>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
          </div>
        </div>
      </div>
      <hr width="50%">
        <div class="container service-scope2">
        <div class="row">
          <div class="container col-md-6">
            <h3>SERVICE TITLE 2</h3>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
          </div>
          <div class="container col-md-6 scope-img2">
            <img src="./images/service-scope2.jpg" alt="Interior Design">
          </div>
        </div>
      </div>
      <hr width="50%">
       <div class="container service-scope3">
        <div class="row">
          <div class="container col-md-6 scope-img3">
            <img src="./images/service-scope3.jpg" alt="Interior Design">
          </div>
          <div class="container col-md-6 scope-txt3">
            <h3>SERVICE TITLE 3</h3>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>
      </div>
    </section>
@endsection
