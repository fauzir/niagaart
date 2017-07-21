@extends('layouts.app')

@section('title')
Services
@endsection

@section('content')
    <section>
    <div class="container-fluid header-service">
      <div class="container-fluid service-head">
        <div class="container service-txt">
          <div class="row">
            <div class="container col-md-3 fill-in">

            </div>
            <div class="container col-md-8 header-txt">
              <h1>{{ $servicecatalogues->opening_title }}</h1>
              <br>
              <h1>This is what we’ve done until now</h1>
              <p>{{ $servicecatalogues->opening_text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <section>
    <div class="container-fluid homeliving-bg">
      <div class="container opening-section">
          <div class="row">
            <div class="container col-md-6 homeliving-txt">
              <h1>HOME & LIVING</h1>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <br>
              <button type="button" class="btn btn-homeliving">LEARN MORE</button>
            </div>
            <div class="container col-md-6 opening-img">
              <img src="./images/Opening.jpg" alt="Interior Design">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="container-fluid apartment-bg">
      <div class="container opening-sectionright">
          <div class="row">
            <div class="container col-md-6 apartment-img">
              <img src="./images/apartment.jpg" alt="Interior Design">
            </div>
            <div class="container col-md-6 apartment-txt">
              <h1>APARTMENT</h1>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <br>
              <button type="button" class="btn btn-homeliving">LEARN MORE</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="container-fluid cafe-bg">
      <div class="container opening-section">
          <div class="row">
            <div class="container col-md-6 cafe-txt">
              <h1>CAFE, FOODCOURT & BAR</h1>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <br>
              <button type="button" class="btn btn-cafe">LEARN MORE</button>
            </div>
            <div class="container col-md-6 cafe-img">
              <img src="./images/cafe.jpg" alt="Interior Design">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="container-fluid apartment-bg">
      <div class="container opening-sectionright">
          <div class="row">
            <div class="container col-md-6 office-img">
              <img src="./images/office.jpg" alt="Interior Design">
            </div>
            <div class="container col-md-6 apartment-txt">
              <h1>SHOP & OFFICE</h1>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <br>
              <button type="button" class="btn btn-homeliving">LEARN MORE</button>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
