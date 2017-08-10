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
          @if ( strlen($service->description) > 970 )
            <div class="row">
              <div class="container col-md-6 homeliving-txt">
                <h1>{{ $service->name }}</h1>
                <br>
                {!! substr($service->description, 0, 970) !!}</p>
              </div>
              <div class="container col-md-6 opening-img wow slideInUp">
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
              </div>
            </div>
            <div class="container text-ext">
                <p>{!! substr($service->description, 970) !!}
                <br>
                <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homeliving">@lang('content.learn-more')</a>
            </div>
          @else
            <div class="row">
              <div class="container col-md-6 homeliving-txt">
                <h1>{{ $service->name }}</h1>
                <br>
                {!! $service->description !!}<br>
                <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homeliving">@lang('content.learn-more')</a>
            </div>
              <div class="container col-md-6 opening-img wow slideInUp">
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
    @else
    <section>
    <div class="container-fluid apartment-bg">
      <div class="container opening-sectionright">
          <div class="row">
            @if ( strlen($service->description) > 970 )
              <div class="container col-md-6 apartment-img wow slideInUp">
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
              </div>
              <div class="container col-md-6 apartment-txt">
                <h1>{{ $service->name }}</h1>
                <br>
                {!! substr($service->description, 0, 970) !!}</p>
              </div>
              <div class="container text-ext">
                <p>{!! substr($service->description, 970) !!}
                <br>
                <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homelivingblack">@lang('content.learn-more')</a>
              </div>
            @else
              <div class="container col-md-6 apartment-img wow slideInUp">
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }} | Niaga Art">
              </div>
              <div class="container col-md-6 apartment-txt">
                <h1>{{ $service->name }}</h1>
                <br>
                {!! $service->description !!}</p>
                <br>
                <a href="{{ route('service', ['locale' => request()->route()->locale, 'slug' => $service->slug]) }}" title="{{ $service->name }} | Niaga Art" class="btn btn-lg btn-homelivingblack">@lang('content.learn-more')</a>
              </div>
            @endif
          </div>
        </div>
      </div>
    </section>
    @endif
    @endforeach
@endsection
