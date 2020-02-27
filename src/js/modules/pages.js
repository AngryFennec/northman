'use strict';


(function () {

if ($('.process')[0]) {
  // $('.process').css('opacity', 0);
  // $('.process').css('padding-top', '50vh');
  $('.process').addClass('transparent');
  var processTop = $('.process').offset().top - 400; 
  var flag = 0;

  $(window).on('scroll', function () {
    if ($(window).scrollTop()  >  processTop) {
      if (flag === 0) {
        $('.description').addClass('color');
        $('.process').removeClass('transparent');
        // $( ".process" ).animate({
        //   opacity: 1,
        // }, 100, function() {
        //   // Animation complete.
        // });
       
        // $('.process').css('background', '#0C1D39');
        //   $( ".process" ).animate({
        //     'padding-top': 100,
        //   }, 1000, function() {
        //     flag = 1,
        //     $('.page-body').removeClass('color');

        //   });
        //   $(document).scrollTop($('.process').offset().top);
          
            // setTimeout(function(){flag = 1}, 500);
      }

    } else {
      $('.description').removeClass('color');
      $('.process').addClass('transparent');
    }
  })
}
 

})();
