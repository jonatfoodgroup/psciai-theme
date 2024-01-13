jQuery(document).ready(function ($) {
  $('[data-slick]').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
});