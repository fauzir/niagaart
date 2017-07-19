<img src="{{ $project->image }}" width="275" height="275" alt="...">
<p>{{ $project->description }}</p>

<div class="row">
  @foreach ($data as $item)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ $item->image }}" alt="">
      <div class="caption">
        <h3>{{ $item->name }}</h3>
        <p>Lorem ipsumLorem ipsum dolosit amet, consectetur adipisicing eli dolor sit amet, consectetur adipisicing elit. </p>

      </div>
    </div>
  </div>
  @endforeach
</div>
