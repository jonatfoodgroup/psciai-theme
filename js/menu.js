jQuery(document).ready(function ($) {
  $("[data-menu]").on("click", function () {
    $("header button").removeClass("active");
    $(".interior-menu").removeClass("active");
    if ($(this).hasClass("active")) {
      clearMenu();
      return;
    } else {
      $(".mega-menu").removeClass("active");
      $(this).addClass("active");
      var menu = $(this).data("menu");
      $(".mega-menu").addClass("active");
      $("#" + menu + "-menu").addClass("active");
    }
  });

  // on click outside of menu
  $(document).mouseup(function (e) {
    var container = $(".mega-menu");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      clearMenu();
    }
  });

  function clearMenu() {
    $("header button").removeClass("active");
    $(".mega-menu").removeClass("active");
    $(".interior-menu").removeClass("active");
  }
});
