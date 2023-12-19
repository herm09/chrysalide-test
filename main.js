jQuery(document).ready(function($) {
    const logo = $(".logo");
    const masthead = $("#masthead");
  
    logo.on("click", function() {
      masthead.slideToggle();
    });
  });