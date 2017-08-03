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
        <div class="col-xs-offset-2 col-xs-8">
            <div class="carousel-inner">
              @foreach($featureds as $index => $featured)
                <div class="item @if($index == 0) {{ 'active' }} @endif">
                    <div class="carousel-content">
                        <div class="container featured-projects">
                            <div class="row">
                              <div class="container col-md-6">
                                <h2>{{ $featured->name }}</h2>
                                <br>
                                <p>{{ $featured->description }}</p>
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
      <div class="row service-label">
      @foreach($projects as $project)
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
          <div class="thumbnail thumbnail-service project" data-toggle="modal" data-id="{{ $project->id }}" data-target="#myModal">
              <img src="{{ asset($project->image) }}" alt="{{ $project->name }} | Niaga Art" >
              <div class="caption">
                <h3>{{ $project->name }}</h3>
                <hr>
                <p>{{ substr($project->description, 0, 150) }}</p>
              </div>
          </div>
      </div>
      @endforeach
      </div>
      <br>
      {{ $projects->links() }}
      <div class="container">
</div>
      <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img id="loading-image" src="{{ asset('img/ajax-loader.gif') }}" alt="Loading | Niaga Art" style="display:none;"/>
     </div>
     </div>
     </div>
  </div>
</section>
@endsection

@section('script')
  <script src="{{ asset('frontend/js/projects-call-item.js') }}"></script>
@endsection
