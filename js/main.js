jQuery(document).ready(function() {
    jQuery('.slider').bxSlider({
        mode: 'fade',
        captions: true,
    });
    jQuery(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
    });
});
jQuery(document).ready(function(){
    jQuery('#header_main_menu').slicknav();
    jQuery.scrollUp();
});