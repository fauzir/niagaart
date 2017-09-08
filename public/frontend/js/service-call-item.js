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
            $("#zoom_01").elevateZoom({
              zoomWindowWidth: 300,
              zoomWindowHeight: 300,
              scrollZoom: true
            });
            // var zoomer = new ZoomPreviewer();
          },
          error: function(response){
            console.log('Error '+response);
          }
        });
        // var ZoomPreviewer = (function() {
        //   var ZoomPreviewer = function(config) {
        //       var onMouseMoveThis = onMouseMove.bind(this);
        //
        //       this.container = $('.zoom-preview');
        //       this.largeImg = $('[data-image="large"');
        //       this.originalImg = $('[data-image="original"');
        //       this.loader = $('.loader-wrapper');
        //
        //       this.width = 0;
        //       this.height = 0;
        //
        //       this.container.on('mousemove', onMouseMoveThis);
        //       this.init();
        //
        //       config = null;
        //   };
        //   ZoomPreviewer.prototype.init = function() {
        //       this.loader.addClass('hide');
        //       this.originalImg.addClass('show');
        //
        //       var img = new Image();
        //       img.src = this.originalImg.attr('src');
        //
        //       this.width = img.width;
        //       this.height = img.height;
        //   };
        //   function onMouseMove(event) {
        //       var oX;
        //       var oY;
        //       var offset = this.container.offset();
        //
        //       oX = event.pageX - offset.left;
        //       oY = event.pageY - offset.top;
        //
        //       if (oX < this.container.width() && oY < this.container.height() && oX > 0 && oY > 0) {
        //           this.largeImg.addClass('show');
        //       } else {
        //           this.largeImg.removeClass('show');
        //       }
        //
        //       if (this.largeImg.is(':visible')) {
        //           var rx = Math.round(oX / this.originalImg.width() * this.width - this.largeImg.width() / 2) * - 1;
        //           var ry = Math.round(oY / this.originalImg.height() * this.height - this.largeImg.height() / 2) * - 1;
        //           var bgPosition = rx + 'px ' + ry + 'px';
        //
        //           var px = oX - this.largeImg.width() / 2;
        //           var py = oY - this.largeImg.height() / 2;
        //
        //           this.largeImg.css({left: px, top: py, backgroundPosition: bgPosition});
        //       }
        //   };
        //
        //   return ZoomPreviewer;
        // })();

        // $('#myModal').load(function() {
        //   var zoomer = new ZoomPreviewer();
        // });
  });
