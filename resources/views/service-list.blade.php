@extends('layouts.app')

@section('title')
<title>NiagaArt | Services</title>
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
              <h1>@lang('content.this-is-what-done')</h1>
              <p>{{ $servicecatalogues->opening_text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    @foreach ($services as $service)
    @if ($service->id % 2 == 1)
    <section>
    <div class="container-fluid homeliving-bg">
      <div class="container opening-section">
            <div class="row">
              <div class="container homeliving-txt">
                <br>
                <img class="wow slideInUp" src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
                <h1>{{ $service->name }}</h1>
                <p>{!! $service->description !!}</p>
                <div class="container">
                    <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homeliving">@lang('content.learn-more')</a>
                </div>
              </div>
            </div>

        </div>
      </div>
    </section>
    @else
    <section>
    <div class="container-fluid apartment-bg">
      <div class="container opening-sectionright">
          <div class="row">
              <div class="container apartment-txt">
              <br>
                <img class="wow slideInUp" src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
                <h1>{{ $service->name }}</h1>
                <p>{!! $service->description !!}</p>
                <div class="container text-ext">
                  <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homelivingblack">@lang('content.learn-more')</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    @endforeach
@endsection
