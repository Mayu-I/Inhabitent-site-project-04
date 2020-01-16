$(function() {
  let $body = $('body');
  let $nav = $('.header');
//   let adHeight = $('.wp-post-image').offset().top;
  $(window).on("scroll", function() {
    //   console.log(adHeight);
    var scroll = $(window).scrollTop() + $(window).height();
    if($body.hasClass('home') || $body.hasClass('page-about')){       
    if(scroll >= 1365) {
      $nav.removeClass('header--white');
    }else{
      $nav.addClass('header--white');
    }
    }else if($body.hasClass('single-adventures')){
        if(scroll >= 1650) {
      $nav.removeClass('header--white');
    }else{
      $nav.addClass('header--white');
    }
    }
  });
});