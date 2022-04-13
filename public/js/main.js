/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$(window).on("load", function () {
  $('#designWrapper').closest('body').addClass("bodyDesign");
  $('#webWrapper').closest('body').addClass("bodyWeb");
  $('#homeWrapper').closest('body').addClass("bodyHome");
  $('#usWrapper').closest('body').addClass("bodyUs");
  $('#contactWrapper').closest('body').addClass("bodyContact");
  $('#animationWrapper').closest('body').addClass("bodyAnimation");
  AOS.init({
    disable: 'mobile'
  });
  var owl = $('.owl-carousel-section');
  owl.owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  });
  var owl2 = $('.owl-carousel-section-2');
  owl2.owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      1300: {
        items: 3
      }
    }
  });
  $('.owl-carousel-animation').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
  });
  /*
  $('.carousel-wrapper .right').click(function() {
    owl.trigger('next.owl.carousel');
  })
   $('.carousel-wrapper .left').click(function() {
      owl.trigger('prev.owl.carousel', [300]);
  })
  */
});
/******/ })()
;