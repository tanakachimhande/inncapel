// Dashboard Functionalty

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

 // Check if the device width is less than or equal to 767px
 var isMobile = window.matchMedia("only screen and (max-width: 767px)").matches;

 // Add or remove the 'toggled' class based on the device width
 if (isMobile) {
     $(".page-wrapper").removeClass("toggled");
 } else {
     $(".page-wrapper").addClass("toggled");
 }

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});

});




