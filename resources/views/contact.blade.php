@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
@foreach($contacts as $contact)
  <hr>

  <div class="row-fluid marketing">
    <div class="span6">
      <img src="{{ URL::to('img/static-contact-maps.png') }}" alt="">
    </div>

    <div class="span6">
      <h4>{{ $contact->address }}</h4>
      <p>{{ $contact->phone }}</p>
      <p>{{ $contact->other_phone }}</p>
    </div>
  </div>

  <hr>

  <div class="row-fluid marketing">
    <div class="span6">
      <form class="form-group" action="#" method="post">
        <label for="Name">Name </label><input type="text" name="name" class="form-control">
        <label for="Email">Email </label><input type="text" name="email" class="form-control">
        <label for="Subject">Subject </label><input type="text" name="subject" class="form-control"><br>
        <label for="Message">Message </label><input type="textarea" name="message" class="form-control"><br>
        <button type="button" name="submit">Submit</button>
      </form>
    </div>

    <div class="span6">
      <img src="{{ URL::to('img/static-contact.png') }}" alt="">
    </div>
  </div>

  <hr>
@endforeach
@endsection
