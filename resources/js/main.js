$(window).on("load", function() {
  

    console.log('prueba');

    AOS.init({disable: 'mobile'});

    var owl = $('.owl-carousel-section');
    owl.owlCarousel({
        loop:false,
        margin:10,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    }); 

    var owl2 = $('.owl-carousel-section-2');
    owl2.owlCarousel({
        loop:false,
        margin:10,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            1300:{
                items:3
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