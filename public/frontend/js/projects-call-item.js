$(document).on("click", ".project", function () {
 var projectId = $(this).data('id');
       $.ajax({
          url: '/projects/item/' + projectId + '',
          type: "get",
          beforeSend: function() {
            $("#loading-image").show();
          },
          success: function(response){
            $('.modal').html(response);
            $('#myModal').modal('show');
            $("#loading-image").hide();
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
  });
