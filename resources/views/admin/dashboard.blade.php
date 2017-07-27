@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h2 align="center">Dashboard</h2>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Visitor Counter <span class="glyphicons glyphicons-show-thumbnails"></span></div>

                <div class="panel-body">
                  <div class="col-md-3">
                	    <a class="info-tiles tiles-inverse has-footer" href="#">
                		    <div class="tiles-heading">
            			        <div class="pull-left">Today</div>
            			        <div class="pull-right">
            			        	<div id="tileorders" class="sparkline-block"><canvas width="39" height="13" style="display: inline-block; width: 39px; height: 13px; vertical-align: top;"></canvas></div>
            			        </div>
            			    </div>
            			    <div class="tiles-body">
            			        <div class="text-center">{{ Counter::allHits(1) }}</div>
            			    </div>
            			    <div class="tiles-footer">
            			    </div>
            			    </a>
                	</div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-green has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">Last 7 days</div>
          			        <div class="pull-right">
          			        	<div id="tilerevenues" class="sparkline-block"><canvas width="40" height="13" style="display: inline-block; width: 40px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">{{ Counter::allHits(7) }}</div>
          			    </div>
          			    <div class="tiles-footer">
          			    </div>
          			    </a>
              	   </div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-blue has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">Last 30 days</div>
          			        <div class="pull-right">
          			        	<div id="tiletickets" class="sparkline-block"><canvas width="13" height="13" style="display: inline-block; width: 13px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">{{ Counter::allHits(30) }}</div>
          			    </div>
          			    <div class="tiles-footer">
          			    </div>
            			  </a>
                	</div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-midnightblue has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">All Time</div>
          			        <div class="pull-right">
          			        	<div id="tilemembers" class="sparkline-block"><canvas width="39" height="13" style="display: inline-block; width: 39px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">{{ Counter::allHits() }}</div>
          			    </div>
          			    <div class="tiles-footer">
          			    </div>
            			   </a>
                	</div>
                </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Blog's Last Update <span class="glyphicons glyphicons-show-thumbnails"></span></div>

              <div class="panel-body">
                <table class="table table-hover">
                  <tr>
                    <th>Updated at</th><th>Title</th><th>Category</th><th>Author</th><th>Views</th>
                  </tr>
                  @foreach ($blogs as $blog)
                    <tr>
                      <td>{{ date_format($blog->updated_at, 'd F Y') }} at {{ date_format($blog->updated_at, 'H i') }}</td>
                      <td>{{ $blog->title }}</td><td>{{ $blog->category }}</td><td>{{ $blog->author }}</td><td>{{ $blog->visitor_count }}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
