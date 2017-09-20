$(document).on("click", ".product", function () {
 var serviceitemId = $(this).data('id');
       $.ajax({
          url: '/service/item/' + serviceitemId + '',
          type: "get",
          beforeSend: function() {
            $("#loading-image").show();
          },
          success: function(response){
            $('.modal').html(response);
            $('#myModal').modal('show');
            $( ".imgZooming" ).each(function(){
                $(this).elevateZoom({
                  zoomWindowPosition: 14,
                  zoomWindowWidth: 300,
                  zoomWindowHeight: 300,
                  scrollZoom: true
                });
            });
          },
          error: function(response){
            console.log('Error '+response);
          }
        })
  });
