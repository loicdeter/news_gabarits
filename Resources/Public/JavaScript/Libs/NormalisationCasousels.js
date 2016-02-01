(function ( $ ) {

    $.fn.CarouselsHeight = function(options) {
        
        var settings = $.extend({
            // These are the defaults.
            carousels : $('div[id^="twbs-carousel-"]')
        }, options );
        
        var carousels = settings.carousels;
        
        carousels.each(function (){
            carouselNormalization($(this));
            console.log($(this));
        });
        
    };

    function carouselNormalization($idCarousel) {
        var items = $($idCarousel).find('.item'), //grab all slides
            heights = [], //create empty array to store height values
            tallest; //create variable to make note of the tallest slide

        if (items.length) {
            function normalizeHeights() {
                items.each(function() { //add heights to array
                    heights.push($(this).height()); 
                });
                tallest = Math.max.apply(null, heights); //cache largest value
                items.each(function() {
                    $(this).css('min-height',tallest + 'px');
                });
            };
            normalizeHeights();

            $(window).on('resize orientationchange', function () {
                tallest = 0, heights.length = 0; //reset vars
                items.each(function() {
                    $(this).css('min-height','0'); //reset min-height
                }); 
                normalizeHeights(); //run it again 
            });
        }
    }
}( jQuery ));
$(document).CarouselsHeight();