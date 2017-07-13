@extends('layouts.app')

@section('content')
@foreach($homes as $home)
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <img src="{{ $home->image }}" alt="">
                <h1>{{ $home->welcome_text }}</h1>
                <p>{{ $home->company_description }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
