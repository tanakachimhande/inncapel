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



// Handling Category Id


document.addEventListener("DOMContentLoaded", function() {
    // Get references to the select element and the hidden input field
    var categorySelect = document.querySelector('select[name="category_id"]');
    var categoryNameInput = document.querySelector('input[name="service_category"]');
    // Add an event listener to the select element
    categorySelect.addEventListener("change", function() {
        // Set the value of the hidden input field to the selected category's name
        categoryNameInput.value = categorySelect.options[categorySelect.selectedIndex].text;
    });
});



