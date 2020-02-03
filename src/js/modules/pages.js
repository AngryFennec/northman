'use strict';


(function () {
  if ($('.process')[0]) {
    var processTop = $('.process').offset().top - 300;
    $('.process').css('opacity', 0);
    $('.process').css('padding-top', '1000px');
    var flag = 0

     $(window).on('scroll', function (){
      if (($(window).scrollTop() > processTop && $(window).scrollTop() < (processTop + 300)) && flag === 0) {

        // $('.description').css('background-color', '');
        $('.page-body').addClass('color');
        $('.page-body').addClass('padding');
        



        $( ".process" ).animate({
                    'opacity': 1,
                    // 'padding-top': '100px'
                  }, 1000, function() {
                    flag=1;
                  });
      } else {
        $('.page-body').removeClass('color');
      }
     })
  }



})();
