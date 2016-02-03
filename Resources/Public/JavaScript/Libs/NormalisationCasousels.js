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
            tallest = 0; //create variable to make note of the tallest slide

        if (items.length) {
            function normalizeHeights() {
                tallest = 0;
                items.each(function() { //add heights to array
                    heights.push($(this).height()); 
                });
                tallest = Math.max.apply(0, heights); //cache largest value
                items.each(function() {
                    $(this).css('min-height',tallest + 'px');
                });
            };
            normalizeHeights();
            heights.length = 0;

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

$(document).ready(function(){
    $('div[id^="twbs-carousel-NewsCarousel-"]').each( function () {
        var clickEvent = false;
        $(this).on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');  
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.list-group').children().length -1;
                var current = $('.list-group li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.list-group li').first().addClass('active'); 
                }
            }
        clickEvent = false;
        });
    });
})
$(window).load(function() {
    $('div[id^="twbs-carousel-NewsCarousel-"]').each( function () {
        var boxheight = $(this).find('.carousel-inner').innerHeight();
        var itemlength = $(this).find('.item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
        $(this).find('.list-group-item').outerHeight(triggerheight);
    });
});