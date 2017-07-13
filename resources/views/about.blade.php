@extends('layouts.app')

@section('content')
@foreach($abouts as $about)
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <img src="{{ $about->image_header }}" alt="">
            <img src="{{ $about->opening_image }}" alt="">
                <h1>{{ $about->opening_title }}</h1>
                <p>{{ $about->opening_text }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
