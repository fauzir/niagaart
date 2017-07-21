<!-- Modal Header -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="modal-title">{{ $product->name }}</h2>
    {{-- <p>Subtitle is also here for sure</p> --}}
</div>
<!-- Modal Body -->
<div class="modal-body">
  <div class="row">
      <img src="{{ asset($product->image) }}">
      <br>
      <div class="container col-md-8">
        <h2>DESCRIPTION</h2>
        <br>
        <p>{{ $product->description }}</p>
      </div>
      <div class="container col-md-4">
        <h2>DETAIL</h2>
        <br>
        <p>Price <strong>${{ $product->price }}</strong></p>
      </div>
      <br>
      <div class="gal">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">



<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""><img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

</div>
  </div>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
</div>
