@extends('layouts.app')

@section('title')
Projects
@endsection

@section('content')
    <section>
    <div class="container featured-projectstitle">
      <h2>@lang('content.featured-project')</h2>
      <hr class="small">
    </div>
          <div id="text-carousel" class="carousel slide featured-projects" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="container">
            <div class="carousel-inner">
              @foreach($featureds as $index => $featured)
                <div class="item @if($index == 0) {{ 'active' }} @endif">
                    <div class="carousel-content">
                        <div class="container featured-projects">
                            <div class="row">
                              <div class="container col-md-6">
                                <h2>{{ $featured->name }}</h2>
                                <br>
                                @if ( strlen($featured->description) > 0 )
                                  <p>{!! $featured->description !!}</p>
                                @else
                                  <p>@lang('content.no-desc')</p>
                                @endif
                              </div>
                              <div class="container col-md-6 opening-img">
                                <img src="{{ asset($featured->image) }}" alt="{{ $featured->name }} | Niaga Art">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
    </section>
<hr>
<section>
  <div class="container service-section">
    <h2>@lang('content.our-project')</h2>
    <hr>
      @foreach($projects->chunk(3) as $projectchunk)
      <div class="row service-label">
      @foreach($projectchunk as $project)
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
          <div class="thumbnail thumbnail-service project" data-toggle="modal" data-id="{{ $project->id }}" data-target="#myModal">
              <img src="{{ asset($project->image) }}" style="height: 205px;" alt="{{ $project->name }} | Niaga Art" >
              <div class="caption">
                @if ( strlen($project->name) > 29 )
                  <h3>{{ substr($project->name, 0, 26) }}...</h3>
                @else
                  <h3>{{ $project->name }}</h3>
                @endif
                <hr>
                @if ( strlen($project->description) > 0 )
                  <p style="min-height: 175px;">{{ substr($project->description, 0, 150) }}</p>
                @else
                  <p style="min-height: 175px;">@lang('content.no-desc')</p>
                @endif
              </div>
          </div>
      </div>
      @endforeach
      </div>
      @endforeach
      <br>
      <div class="container">
         <div class="row">
            <nav aria-label="Page navigation">
               {!! PaginateRoute::renderPageList($projects, $full = false, $class = 'pagination', $additionalLinks = true) !!}
            </nav>
         </div>
      </div>
      <div class="container">
</div>
      <div class="modal fade" id="myModal">
        <img id="loading-image" src="{{ asset('img/ajax-loader.gif') }}" alt="Loading | Niaga Art" style="display:none;"/>
     </div>
  </div>
</section>
@endsection
