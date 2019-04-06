//navigayion

$("#navToggle").click(function() {
  $(this).toggleClass("active");
  $(".overlay").toggleClass("open");
  // this line ▼ prevents content scroll-behind
  $("body").toggleClass("locked");
});

//---inz slick

$('.top_home_block_slide').slick({
  arrows: false,
  dots: true,
  mobileFirst: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
