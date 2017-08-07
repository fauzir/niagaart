$(document).on("click", ".product", function () {
 var serviceitemId = $(this).data('id');
       $.ajax({
          url: '/service/item/' + serviceitemId + '',
          type: "get",
          beforeSend: function() {
            $("#loading-image").show();
          },
          success: function(response){
            $('.modal-content').html(response)
            $('#myModal').modal('show');
            $("#loading-image").hide();
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
  });
