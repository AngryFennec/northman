'use strict';


(function () {
  // console.log('Here is your code');
  if ($('.process')[0]) {
    
    $('.process').css('opacity', 0);
    $('.process').css('padding-top', 2000);
    var processTop = $('.process').offset().top +900;
    var flag = 0;

    $(window).on('scroll', function (){
      if ($(window).scrollTop() + $(window).height() >processTop) {
        if (flag === 0) {
          $( ".process" ).animate({
            opacity: 1,
          }, 500, function() {
            // Animation complete.
          });

          $(document).scrollTop($('.process').offset().top);
              $( ".process" ).animate({
                'padding-top': 130,
              }, 1000, function() {
                flag = 1
              });
              // setTimeout(function(){flag = 1}, 500);
        }

      }
    })
  }


})();
