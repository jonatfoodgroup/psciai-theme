// A simple on scroll animation to fade in sections with css
jQuery(document).ready(function($) {
    // Check if element is scrolled into view
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
      // Lets add in an offset so the animate starts a little before the element is in view
        docViewTop = docViewTop - 50;
        var elemTop = $(elem).offset().top;

        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }
    // If element is scrolled into view, fade it in
    $(window).scroll(function() {
      //  will have "fade-in" class
        $('.fade-in').each(function() {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('active');
            }
        });
    });

    // On first load, check if the elements are in view
    $('.fade-in').each(function() {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('active');
        }
    });

    // if there are a grid of elements, fade them in one by one with a delay
    $('.fade-in-grid').each(function() {
        var delay = 0;
        $(this).find('.fade-in').each(function() {
            $(this).css('animation-delay', delay + 'ms');
            delay += 200;
        });
    });
  });