'use strict';
(function() {
$('.header__burder').on('click', function(){
    $('.header ul').toggle(400);
});

$('a[href="#blog"]').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#blog').offset().top
    }, 400)
  })
  $('a[href="#slider"]').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#slider').offset().top
    }, 400)
  })
  $('a[href="#friends"]').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#friends').offset().top
    }, 400)
  })
  $('a[href="#blog"]').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#blog').offset().top
    }, 400)
  })
  $('a[href="#contacts"]').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#contacts').offset().top
    }, 400)
  })
})();
