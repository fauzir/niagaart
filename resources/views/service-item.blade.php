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
        <p>{{ $serviceitem->description }}</p>
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
            <p>{{ $product->price }}</p>

          </div>
          @endforeach
        </div>
      </div>
<!-- Modal Footer -->
<div class="modal-footer">
</div>
