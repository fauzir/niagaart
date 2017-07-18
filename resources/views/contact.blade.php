@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
@foreach($contacts as $contact)
  <hr>

  <div class="row-fluid marketing">
    <div class="span6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15844.166130812735!2d107.53954429055233!3d-6.885628746133135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1500258978926" width="475" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        <label for="Email">Email </label><input type="email" name="email" class="form-control">
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
