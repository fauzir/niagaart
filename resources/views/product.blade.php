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

  </div>
</div>

<div class="col-sm-12">
        <div class="masonry masonry-columns-3">
          <div class="masonry-item">
            <div class="media">
              <img src="http://placehold.it/350x150" class="img-responsive center-block" alt="">
            </div>
            <h2 class="post-title">Getting Bootstrap Tabs to Play Nice with Masonry</h2>
            <p>This is my template for using Masonry 3 with Bootusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrstrap, Desandro Masonry & Twitter Bootstrap 3. How to use responsive twitter bootstrap & masonry together</p>

          </div>
          <div class="masonry-item">
            <div class="media">
              <img src="http://placehold.it/450x150" class="img-responsive center-block" alt="">
            </div>
            <h2 class="post-title">Bootstrap Masonry</h2>
            <p>Masonry CSS with Bootstrap, Build a Dynamic Grid with Salvattore and Bootstrap, Masonry with Bootstrap 3, How to create the masonry effects with just bootstrap 3 grid</p>

          </div>
          <div class="masonry-item">
            <div class="media">
              <img src="http://placehold.it/550x150" class="img-responsive center-block" alt="">
            </div>
            <h2 class="post-title">Masonry CSS with Bootstrap</h2>
            <p>Bootstrap Masonry example snippets with CSS, Javascript and HTML. ... Example of using CSS only for masonry / isotope style layout with Bootstrap panels.</p>

          </div>
          <div class="masonry-item">
            <div class="media">
              <img src="http://placehold.it/450x250" class="img-responsive center-block" alt="">
            </div>
            <h2 class="post-title">Build a Dynamic Grid with Bootstrap</h2>
            <p>Bootstrap snippet Example of usingusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandrusing Masonry 3 with Bootstrap, Desandr CSS only for masonry / isotope style layout with Bootstrap panels.</p>

          </div>
          <div class="masonry-item">
            <!-- No Media -->
            <h2 class="post-title">Masonry with Bootstrap 3</h2>
            <p>In conclusion remember that Masonry was born and remains a JavaScript grid layout library, so even if you can make it work with CSS</p>

          </div>
          <div class="masonry-item">
            <div class="media">
              <img src="http://placehold.it/450x350" class="img-responsive center-block" alt="">
            </div>
            <h2 class="post-title">How to create the masonry</h2>
            <p>Getting twitter bootstrap's responsive layout and masonry to play alongside each other is pretty simple.</p>

          </div>
          <div class="masonry-item">
            <!-- No Media -->
            <h2 class="post-title">Masonry & Twitter Bootstrap 3</h2>
            <p>For this post I created an example of minimalistic layout for a blog/portfolio using both Bootstrap and Masonry. Why it should be useful?</p>

          </div>
        </div>
      </div>
<!-- Modal Footer -->
<div class="modal-footer">
</div>
