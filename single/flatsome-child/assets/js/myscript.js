jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: false,
        items: 1
    });

    $('body.home #content > .row-main').removeClass('row');

    //resize
    $( window ).resize(function() {
        var width = $( window ).width();
        if (width > 768)
        {
            $('body.home #content > .row-main').removeClass('row');
        }
        else{
            $('body.home #content > .row-main').addClass('row');
        }
    });

});

