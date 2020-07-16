$(window).scroll(function() {
  0 < $(this).scrollTop()
    ? $(".shrink").addClass("fixed-me")
    : $(".shrink").removeClass("fixed-me");
});
