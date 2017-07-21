@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="glyphicons glyphicons-show-thumbnails"></span></div>

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
            			        <div class="text-center">67</div>
            			    </div>
            			    <div class="tiles-footer">
            			    	<div class="pull-left">manage orders</div>
            			    	<div class="pull-right percent-change">+20.7%</div>
            			    </div>
            			    </a>
                	</div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-green has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">Week</div>
          			        <div class="pull-right">
          			        	<div id="tilerevenues" class="sparkline-block"><canvas width="40" height="13" style="display: inline-block; width: 40px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">545</div>
          			    </div>
          			    <div class="tiles-footer">
          			    	<div class="pull-left">go to accounts</div>
          			    	<div class="pull-right percent-change">+17.2%</div>
          			    </div>
          			    </a>
              	   </div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-blue has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">Month</div>
          			        <div class="pull-right">
          			        	<div id="tiletickets" class="sparkline-block"><canvas width="13" height="13" style="display: inline-block; width: 13px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">1.893</div>
          			    </div>
          			    <div class="tiles-footer">
          			    	<div class="pull-left">see all tickets</div>
          			    	<div class="pull-right percent-change">+10.3%</div>
          			    </div>
            			  </a>
                	</div>

                  <div class="col-md-3">
                  	<a class="info-tiles tiles-midnightblue has-footer" href="#">
          			    <div class="tiles-heading">
          			        <div class="pull-left">Year</div>
          			        <div class="pull-right">
          			        	<div id="tilemembers" class="sparkline-block"><canvas width="39" height="13" style="display: inline-block; width: 39px; height: 13px; vertical-align: top;"></canvas></div>
          			        </div>
          			    </div>
          			    <div class="tiles-body">
          			        <div class="text-center">19.567</div>
          			    </div>
          			    <div class="tiles-footer">
          			    	<div class="pull-left">manage members</div>
          			    	<div class="pull-right percent-change">-11.1%</div>
          			    </div>
            			   </a>
                	</div>

                  <h3 align="center">SERVICES</h3>

                  <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <a href="{{ route('service', ['name' => 'home-living']) }}".>
                      <img src="https://s-media-cache-ak0.pinimg.com/736x/ee/be/f6/eebef693e9c97721e9b5ea39a76789f0--modern-living-room-designs-living-room-layouts.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Home Living</h4>
                      <span class="text-muted">Interior Design for Home Living</span>
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <a href="{{ route('service', ['name' => 'apartment']) }}">
                      <img src="https://s-media-cache-ak0.pinimg.com/736x/32/46/7f/32467f1220a1248149f2b366b91a5915--white-small-apartment-one-space-apartment.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Apartment</h4>
                      <span class="text-muted">Interior Design for Apartment</span>
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <a href="{{ route('service', ['name' => 'cafe-foodcourt']) }}">
                      <img src="https://s-media-cache-ak0.pinimg.com/736x/e8/77/89/e877895aa6cf035030e4943df02eb121--restaurant-interior-design-restaurant-interiors.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Cafe & FoodCourt</h4>
                      <span class="text-muted">Interior Design for Cafe & Foodcourt</span>
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <a href="{{ route('service', ['name' => 'shop-office']) }}">
                      <img src="https://s-media-cache-ak0.pinimg.com/736x/2b/a7/24/2ba7241bff2e37a67ed68b432a2351bf--design-offices-office-designs.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Shop / Office</h4>
                      <span class="text-muted">Interior Design for Shop / Office</span>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
