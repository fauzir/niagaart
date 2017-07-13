@extends('layouts.app')

@section('content')
@foreach($contacts as $contact)
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
                <h1>{{ $contact->address }}</h1>
                <p>{{ $contact->phone }}</p>
                <p>{{ $contact->other_phone }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
