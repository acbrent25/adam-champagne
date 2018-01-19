( function( $ ) {
  
    // call owl carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        singleItem: true,
        autoplay: true,
        autoHeight:true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    new WOW().init();


$("#form-check").hide();

} )( jQuery ); // Document ready