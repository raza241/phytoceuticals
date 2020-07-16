jQuery(window).scroll(function() {
  0 < jQuery(this).scrollTop()
    ? jQuery(".shrink").addClass("fixed-me")
    : jQuery(".shrink").removeClass("fixed-me");
});
