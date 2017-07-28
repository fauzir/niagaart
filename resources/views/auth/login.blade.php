@extends('auth.layout')

@section('content')
      <div class="container">
          <div class="card card-container">
              <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
              <img id="profile-img" class="profile-img-card" src="{{ asset('img/logo-round.png') }}" />
              <h3 align="center">Login to Admin Panel</h3>
              <form class="form-signin" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <span id="reauth-email" class="reauth-email"></span>
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  {{-- <div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Remember Me
                      </label>
                  </div> --}}
                  <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Login</button>
              </form><!-- /form -->
              {{-- <a href="#" class="forgot-password">
                  Forgot the password?
              </a> --}}
          </div><!-- /card-container -->
      </div><!-- /container -->
@endsection
