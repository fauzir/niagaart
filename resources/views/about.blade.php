@extends('layouts.app')

@section('title')
About
@endsection

@section('content')
@foreach($abouts as $about)
  <hr>
  <img src="{{ $about->image_header }}" width="100%" alt="">

  <hr>

  <div class="row-fluid marketing" style="background-color: #afafaf;">
    <div class="span6">
      <h4>{{ $about->opening_title }}</h4>
      <p>{{ $about->opening_text }}</p>
    </div>

    <div class="span6">
      <img src="{{ $about->opening_image }}" alt="">
    </div>
  </div>

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

  <h2>Instagram</h2>
  <iframe allowtransparency="true" scrolling="no" src="//lightwidget.com/widgets/cb160f5e90ea56f6bdcf4fc1ed39df81.html" style="width: 100%; border: 0; overflow: hidden;"></iframe>

  <hr>
@endforeach
@endsection
