/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ 3:
/***/ (function(module, exports) {

$(document).on("click", ".product", function () {
    var serviceitemId = $(this).data('id');
    $.ajax({
        url: '/service/item/' + serviceitemId + '',
        type: "get",
        beforeSend: function beforeSend() {
            $("#loading-image").show();
        },
        success: function success(response) {
            $('.modal').html(response);
            $('#myModal').modal('show');
            var zoomer = new ZoomPreviewer();
            $("#loading-image").hide();
        },
        error: function error(response) {
            console.log('Error ' + response);
        }
    });
    var ZoomPreviewer = function () {
        var ZoomPreviewer = function ZoomPreviewer(config) {
            var onMouseMoveThis = onMouseMove.bind(this);

            this.container = $('.zoom-preview');
            this.largeImg = $('[data-image="large"');
            this.originalImg = $('[data-image="original"');
            this.loader = $('.loader-wrapper');

            this.width = 0;
            this.height = 0;

            this.container.on('mousemove', onMouseMoveThis);
            this.init();

            config = null;
        };
        ZoomPreviewer.prototype.init = function () {
            this.loader.addClass('hide');
            this.originalImg.addClass('show');

            var img = new Image();
            img.src = this.originalImg.attr('src');

            this.width = img.width;
            this.height = img.height;
        };
        function onMouseMove(event) {
            var oX;
            var oY;
            var offset = this.container.offset();

            oX = event.pageX - offset.left;
            oY = event.pageY - offset.top;

            if (oX < this.container.width() && oY < this.container.height() && oX > 0 && oY > 0) {
                this.largeImg.addClass('show');
            } else {
                this.largeImg.removeClass('show');
            }

            if (this.largeImg.is(':visible')) {
                var rx = Math.round(oX / this.originalImg.width() * this.width - this.largeImg.width() / 2) * -1;
                var ry = Math.round(oY / this.originalImg.height() * this.height - this.largeImg.height() / 2) * -1;
                var bgPosition = rx + 'px ' + ry + 'px';

                var px = oX - this.largeImg.width() / 2;
                var py = oY - this.largeImg.height() / 2;

                this.largeImg.css({ left: px, top: py, backgroundPosition: bgPosition });
            }
        };

        return ZoomPreviewer;
    }();

    // $('#myModal').load(function() {
    //   var zoomer = new ZoomPreviewer();
    // });
});

/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(3);


/***/ })

/******/ });