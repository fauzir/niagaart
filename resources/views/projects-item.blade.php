<!-- Modal Header -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="modal-title">{{ $project->name }}</h2>
    {{-- <p>Subtitle is also here for sure</p> --}}
</div>
<!-- Modal Body -->
<div class="modal-body">
  <div class="row">
  <img src="{{ $project->image }}" width="275" height="275" alt="{{ $project->name }} | Niaga Art">
  <br>
  <div class="container col-md-8 desc-popup">
                    <h2>{{ $project->name }}</h2>
                    <br>
                    <p>{{ $project->description }}</p>
                  </div>
                  <div class="container col-md-4 detail-popup">
                    <h2>DETAIL ARE HERE</h2>
                    <br>
                    <p>JL. Sangkuriang No 43
                    Cimahi Utara Jawa Barat
                    Indonesia</p>
                    <br>
                    <p>Phone : (022) 87800639</p>
                    <br>
                    <p>Message/Whatsapp : 0878-2454-2982</p>
                    <br>
                    <p>email : niagac7@gmail.com</p>
                    <br>
                    <p>Mon - Fri : 08:00 - 16:00</p>
                    <br>
                    <p>Sat - Sun : 09:00 - 15:00</p>
                  </div>
                  <br>
                  <h2>ITEM INCLUDED ON THIS PROJECT</h2>
                  <hr width="50%">
                  <div class="container masonry-catalogue">
                    <div class="col-sm-12">
                      <div class="masonry masonry-columns-3">
                        @foreach ($data as $item)
                        <div class="masonry-item">
                          <div class="media">
                            <img src="{{ asset($item->image) }}" width="50%" class="img-responsive center-block" alt="{{ $item->name }} | Niaga Art">
                          </div>
                          <h2 class="post-title">{{ $item->name }}</h2>
                          <p>{{ $item->description }}</p>
                          <p>${{ $item->price }}</p>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
  </div>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
</div>
