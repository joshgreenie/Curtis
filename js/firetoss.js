////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////


// you can change the settings in \firetoss_seed\js\jquery.meanmenu.js

(function ($) {
    $(document).ready(function () {


////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////
        $('header nav').meanmenu();



////////////////////////////////////////
//        Owl Carousel                //
////////////////////////////////////////


        $('.owl-carousel-content').owlCarousel({
            dots: true,
            autoplay: false,
            items: 1
        });

        $('.owl-carousel-hero').owlCarousel({
            dots: true,
            autoplay: false,
            items: 1
        });
        $('a.card-button').hover(function(){
                $( this ).addClass( "animated jello" );
            }, function() {
                $( this ).removeClass( "animated jello" );
            }
        );

        // $('a.lightbox-link').featherlight();
        $('a.lightbox-link').featherlightGallery({
            previousIcon: 'PREV',     /* Code that is used as previous icon */
            nextIcon: 'NEXT',         /* Code that is used as next icon */
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300          /* fadeOut speed before slide is loaded */
        });

        $('.owl-gallery').owlCarousel({
            dots: true,
            autoplay: false,
            items: 1,
            navClass: [ 'owl-prev text-arrow', 'owl-next text-arrow' ],

        });

});
})(jQuery);


////////////////////////////////////////
//        Scroll Reveal               //
////////////////////////////////////////

// https://github.com/jlmakes/scrollreveal
//
// // Changing the defaults
//     window.sr = ScrollReveal({ reset: true });
//
// // Customizing a reveal set
// sr.reveal('.foo', { duration: 200 });
//
// // Basic usage and variations
 window.sr = ScrollReveal();
sr.reveal('.card', { duration: 2000 }, 500);
// sr.reveal('.bar');
//
// // Is the same as...
// window.sr = ScrollReveal().reveal('.card, .bar');

