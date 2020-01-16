$(function() {
  let $nav = $('.header');
  let navHeight = $('.home-hero').offset().top;
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop() + $(window).height();
    if(scroll >= navHeight) {
      $nav.removeClass('header--white');
    }else{
      $nav.addClass('header--white');
    }
  });
});