@extends('auth.layout')

@section('content')
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="{{ asset('img/logo-round.png') }}" />
            <h3 align="center">Register</h3>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                {{-- <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required> --}}
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Register</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
@endsection
