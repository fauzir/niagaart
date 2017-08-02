$(document).on("click", ".product", function () {
 var serviceitemId = $(this).data('id');
       $.ajax({
          url: '/service/item/' + serviceitemId + '',
          type: "get",
          success: function(response){
            $('.modal-content').html(response)
            $('#myModal').modal('show');
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
  });
