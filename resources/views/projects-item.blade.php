<!-- Modal Header -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="modal-title">{{ $project->name }}</h2>
    {{-- <p>Subtitle is also here for sure</p> --}}
</div>
<!-- Modal Body -->
<div class="modal-body">
  <img src="{{ $project->image }}" width="275" height="275" alt="...">
  <p>{{ $project->description }}</p>

  <div class="row">
    @foreach ($data as $item)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{ asset($item->image) }}" alt="">
        <div class="caption">
          <h3>{{ $item->name }}</h3>
          <p>Lorem ipsumLorem ipsum dolosit amet, consectetur adipisicing eli dolor sit amet, consectetur adipisicing elit. </p>

        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
</div>
