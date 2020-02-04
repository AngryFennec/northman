(function() {

  /*  var swiper = new Swiper('.gallery__main-slider', {
         direction: 'vertical',
         slidesPerView: 1.5,
         mousewheelControl: true,
         parallax: true,
         speed: 600,
      onlyExternal:true
     });
  */
  var s1 = document.querySelector('.js-gallery-first .swiper-container');
  var s2 = document.querySelector('.js-gallery-second .swiper-container');
  if (s1 && s2) {
  var firstSwiper = new Swiper(s1, {
    pagination: {
      el: '.swiper-pagination-first',
      type: 'progressbar',
    },
    centeredSlides: true,
    //onlyExternal:true
  });
  var secondSwiper = new Swiper(s2, {
    pagination: {
      el: '.swiper-pagination-second',
      type: 'progressbar',
    },
    //onlyExternal:true
  });

  var spanCurrentFirst = document.querySelector('.js-gallery-first .js-current');
  firstSwiper.on('slideChange', function() {
    var num = firstSwiper.activeIndex + 1;
    var str;
    str = num < 10 ? '0' + num : num;
    spanCurrentFirst.textContent = str;
  });

  var spanCurrentSecond = document.querySelector('.js-gallery-second .js-current');
  secondSwiper.on('slideChange', function() {
    var num = secondSwiper.activeIndex + 1;
    var str;
    str = num < 10 ? '0' + num : num;
    spanCurrentSecond.textContent = str;
  });

  var spanAllFirst = document.querySelector('.js-gallery-first .js-all');
  var spanAllSecond = document.querySelector('.js-gallery-second .js-all');

  var num1 = firstSwiper.slides.length;
  var str1;
  str1 = num1 < 10 ? '0' + num1 : num1;
  spanAllFirst.textContent = str1;
  var num2 = secondSwiper.slides.length;
  var str2;
  str2 = num2 < 10 ? '0' + num2 : num2;
  spanAllSecond.textContent = str2;
}

var mainSlider = document.querySelector('.gallery__main-slider-container');
if(mainSlider) {
  var mainSwiper = new Swiper (mainSlider, {
			// Optional parameters
      direction: 'vertical',
      slidesPerView: 1,
      mousewheelControl: true,
      parallax: true,
      speed: 600,
      centeredSlides: true,

    });

var counter = 0;
window.addEventListener("wheel", event =>  {
  if(event.deltaY < 0) {
    counter = 0;
  }
  if (mainSwiper.activeIndex === mainSwiper.slides.length-1 && event.deltaY > 0) {
    if (counter > 0) {
      window.scrollBy({
  top: 300,
  behavior: 'smooth'
});
    } else {
      counter++;
    }
  }
});
mainSwiper.on('slideChangeTransitionEnd', function () {
        var acs = document.querySelectorAll('.swiper-slide-active')[0];
        var hasVerticalScrollbar = acs.scrollHeight > acs.clientHeight;

        if (hasVerticalScrollbar) {
            var scrollHeight = acs.scrollHeight;
            var slideSize = acs.swiperSlideSize;
            var scrollDifferenceTop = scrollHeight - slideSize;

            acs.addEventListener('wheel', findScrollDirectionOtherBrowsers);

            function findScrollDirectionOtherBrowsers(event) {

                var scrollDifference = scrollHeight - slideSize - acs.scrollTop;

								// Scroll wheel browser compatibility
								var delta = event.wheelDelta || -1 * event.deltaY;

                // Enable scrolling if at edges
                var spos = delta < 0 ? 0 : scrollDifferenceTop;

                if (!(scrollDifference == spos))
                	swiper.mousewheel.disable();
                else
                	swiper.mousewheel.enable();
                if (mainSwiper.activeIndex === mainSwiper.slides.length) {
                  console.log(event);
                }
            }
        }
    });
  }
})();
