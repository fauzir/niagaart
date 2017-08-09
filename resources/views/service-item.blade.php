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
      <img src="{{ asset($serviceitem->image) }}" alt="{{ $serviceitem->name }} | Niaga Art" >
      <br>
      <div class="container col-md-8">
        <h2>DETAIL</h2>
        <br>
        {!! $serviceitem->detail !!}

      </div>
      <div class="container col-md-4">
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
  @if ($serviceitem->id == $itemcount)
    <div class="col-md-6 previous-arrow">
       <a href="#" class="product" data-id="{{ $serviceitem->id-1 }}" title="previous-item"><p><< Previous</p></a>
    </div>
  @elseif ($serviceitem->id == 1)
    <div class="col-md-6 next-arrow">
       <a href="#" class="product" data-id="{{ $serviceitem->id+1 }}" title="next-item"><p>Next >></p></a>
    </div>
  @else
    <div class="col-md-6 previous-arrow">
       <a href="#" class="product" data-id="{{ $serviceitem->id-1 }}" title="previous-item"><p><< Previous</p></a>
    </div>
    <div class="col-md-6 next-arrow">
       <a href="#" class="product" data-id="{{ $serviceitem->id+1 }}" title="next-item"><p>Next >></p></a>
    </div>
  @endif

           </div>

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
            $('.modal-content').html(response)
            $("#loading-image").hide();
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
  });
</script>
