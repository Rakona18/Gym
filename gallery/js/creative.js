(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
    // Table id's
    $(".buttons").on('click','a',function(){
        event.preventDefault();
       var classToShow = this.id.split('-')[1],
           filter = classToShow === "all" ? 'div': '.' + classToShow;
       $(".table tbody tr td")
           .children().show().addClass('active')
           .not(filter).hide();
    });
    $(".buttons").on('click','#choice-all',function(){
        $(".table tbody tr td div").removeClass('active');
    }); 
    // Owl Carousel
    $(".owl-carousel").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 4,
      nav : true,
      loop: true,
      margin:10,
      itemsDesktop : [1199,3],
      navigation : true,
      pagination : false,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3,
        },
        1000:{
            items:4
        }
    },
      itemsDesktopSmall : [979,1]
    });
    // FancyBox
    $(".various").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        height      : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        helpers: {
        overlay: {
            locked: false
            }
        },
        closeEffect : 'none'
        });

    

})(jQuery); // End of use strict
