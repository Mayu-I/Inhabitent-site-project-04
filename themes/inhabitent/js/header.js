$(function() {
  let $body = $('body');
  let $nav = $('.header');
  let heroHeight = $('.home-hero').offset().top;
  let adHeight = $('.wp-post-image').offset().top;
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop() + $(window).height();
    if($body.hasClass('home') || $body.hasClass('page-about')){       
        // console.log(navHeight) ;
    if(scroll >= heroHeight) {
      $nav.removeClass('header--white');
    }else{
      $nav.addClass('header--white');
    }
    }else if($body.hasClass('single-adventures')){
        if(scroll >= adHeight) {
      $nav.removeClass('header--white');
    }else{
      $nav.addClass('header--white');
    }
    }
  });
});