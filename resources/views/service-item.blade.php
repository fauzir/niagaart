<div class="modal-dialog modal-lg">
<div class="modal-content">
<img id="loading-image" src="{{ asset('img/ajax-loader.gif') }}" alt="Loading | Niaga Art" style="display:none;"/>
<!-- Modal Header -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="modal-title">{{ $serviceitem->name }}</h2>
    {{-- <p>Subtitle is also here for sure</p> --}}
</div>
<!-- Modal Body -->
<div class="modal-body">
  <div class="row">
      {{-- <div class="loader-wrapper">
        <h4 class="loader-text">Loading the image</h4>
        <div class="loader"></div>
    </div>

    <div class="zoom-preview">
        <div data-image="large" class="zoom-preview__image zoom-preview__image--large"></div>
        <div class="zoom-preview__image zoom-preview__image--original">
            <img data-image="original" src="{{ asset($serviceitem->image) }}" alt="">
        </div>
    </div> --}}
      <img id="zoom_01" class="zooming" src="{{ asset($serviceitem->image) }}" data-zoom-image="{{ asset($serviceitem->image) }}"/>
      <br>
      <div class="container col-md-8 detail-item">
        <h2>DETAIL</h2>
        <br>
        {!! $serviceitem->detail !!}

      </div>
      <div class="container col-md-4 desc-item">
        <h2>DESCRIPTION</h2>
        <br>
        @if ( strlen($serviceitem->description) > 0 )
          <p>{{ $serviceitem->description }}</p>
        @else
          <p>@lang('content.no-desc')</p>
        @endif
      </div>
      <br>

  </div>
</div>

<div class="col-sm-12">
        <div class="masonry masonry-columns-3">
          @foreach ($products as $product)
          <div class="masonry-item">
            <div class="media">
              <img src="{{ asset($product->image) }}" class="img-responsive center-block" alt="{{ $product->name }} | Niaga Art">
            </div>
            <h2 class="post-title">{{ $product->name }}</h2>
            <p>Rp. {{ $product->price }}</p>

          </div>
          @endforeach
        </div>

      </div>

<!-- Modal Footer -->
<div class="modal-footer">


           </div>
         </div>
         </div>
       @if ($serviceitem->id == $itemfirst->id && $itemfirst->id == $itemcount->id)
         <span></span>
         @elseif ($serviceitem->id == $itemfirst->id)
           <a class="slide-fixed right carousel-control item-right product" href="#" data-id="{{ $serviceitem->id+1 }}" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
         @elseif ($serviceitem->id == $itemcount->id)
           <a class="slide-fixed left carousel-control item-left product" href="#" data-id="{{ $serviceitem->id-1 }}" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
         @else
           <a class="slide-fixed left carousel-control item-left product" href="#" data-id="{{ $serviceitem->id-1 }}" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="slide-fixed right carousel-control item-right product" href="#" data-id="{{ $serviceitem->id+1 }}" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
         @endif




<script>
$(".product").on("click", function () {
 var serviceitemId = $(this).data('id');
       $.ajax({
          url: '/service/item/' + serviceitemId + '',
          type: "get",
          beforeSend: function() {
            $("#loading-image").show();
          },
          success: function(response){
            $('.modal-content').html(response);
            $("#loading-image").hide();
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
  });
</script>
