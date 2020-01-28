var mySwiper = new Swiper('.swiper-container', {

  loop: true,
  autoplay: {
    delay: 3000,
  },
  onSlideChangeStart: function(s) {
    var currentSlide = (s.slides[s.activeIndex]);
    var prevSlide = (s.slides[s.previousIndex]);
    prevSlide.querySelector('img').classList.remove('animated');
    currentSlide.querySelector('img').classList.add('animated');


      },
      onSlideChangeEnd: function(s) {
          var currentSlide = (s.slides[s.activeIndex]);

      }
});
/*
mySwiper.on('slideChangeTransitionStart', function () {
  var prev = mySwiper.previousIndex-1;
  var next = mySwiper.activeIndex;
  var prevSlide = mySwiper.slides[prev];
  var nextSlide = mySwiper.slides[next];
  prevSlide.querySelector('img').classList.remove('animated');
  nextSlide.querySelector('img').classList.add('animated');
  console.log(nextSlide);
});
*/
