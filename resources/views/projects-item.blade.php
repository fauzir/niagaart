
<div class="modal-dialog modal-lg">
<div class="modal-content">
<img id="loading-image" src="{{ asset('img/ajax-loader.gif') }}" alt="Loading | Niaga Art" style="display:none;"/>
<!-- Modal Header -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="modal-title">{{ $project->name }}</h2>
    {{-- <p>Subtitle is also here for sure</p> --}}
</div>
<!-- Modal Body -->
<div class="modal-body">
  <div class="row">
  <img src="{{ $project->image }}" width="275" height="275" alt="{{ $project->name }} | Niaga Art" onContextMenu="return false;">
  <br>
  <div class="container col-md-8 desc-popup">
                    <h2>{{ $project->name }}</h2>
                    <br>
                    @if ( strlen($project->description) > 0 )
                      <p>{!! $project->description !!}</p>
                    @else
                      <p>@lang('content.no-desc')</p>
                    @endif
                  </div>
                  <div class="container col-md-4 detail-popup">
                    <h2>DETAIL</h2>
                    <br>
                    <p>{{ $contact->address }}</p>
                    <br>
                    <p>@lang('content.phone') : <a href="tel:{{ str_replace (" ", "", $contact->phone) }}" title="Contact Phone | Niaga Art">{{ $contact->phone }}</a></p>
                    <br>
                    <p>@lang('content.message') : <a href="tel:{{ str_replace (" ", "", $contact->other_phone) }}" title="Contact Message | Niaga Art">{{ $contact->other_phone }}</a></p>
                    <br>
                    <p>@lang('content.email') : <a href="mailto:{{ $contact->email }}" title="Contact Email | Niaga Art">{{ $contact->email }}</a></p>
                    <br>
                  @foreach($workHours as $workHour)
                    <p>{{ $workHour }}</p>
                    <br>
                  @endforeach
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
                            <img src="{{ asset($item->image) }}" width="50%" class="img-responsive center-block" alt="{{ $item->name }} | Niaga Art" onContextMenu="return false;">
                          </div>
                          <h2 class="post-title">{{ $item->name }}</h2>
                          @if ( strlen($item->description) > 0 )
                            <p>{{ $item->description }}</p>
                          @else
                            <p>@lang('content.no-desc')</p>
                          @endif
                          <p>Rp. {{ $item->price }}</p>
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
         </div>
         </div>
         @if ($project->id == $itemfirst->id)
           <a class="slide-fixed right carousel-control item-right project" href="#" data-id="{{ $project->id+1 }}" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
         @elseif ($project->id == $itemcount)
           <a class="slide-fixed left carousel-control item-left project" href="#" data-id="{{ $project->id-1 }}" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
         @else
           <a class="slide-fixed left carousel-control item-left project" href="#" data-id="{{ $project->id-1 }}" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="slide-fixed right carousel-control item-right project" href="#" data-id="{{ $project->id+1 }}" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
         @endif

<script>
$(".project").on("click", function () {
 var projectId = $(this).data('id');
       $.ajax({
          url: '/projects/item/' + projectId + '',
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
