(function() {

  var mainSlider = document.querySelector('.gallery__main-slider-container');
  if(mainSlider) {
    var mainSwiper = new Swiper (mainSlider, {
  			// Optional parameters
        direction: 'vertical',
        slidesPerView: 1,
        mousewheel: true,
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

    }

  var s1 = document.querySelector('.js-gallery-first .swiper-container');
  var s2 = document.querySelector('.js-gallery-second .swiper-container');
  var s3 = document.querySelector('.js-gallery-third .swiper-container');
  if (s1 && s2 && s3) {
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

  var thirdSwiper = new Swiper(s3, {
    pagination: {
      el: '.swiper-pagination-third',
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
  var spanCurrentThird = document.querySelector('.js-gallery-third .js-current');
  thirdSwiper.on('slideChange', function() {
    var num = thirdSwiper.activeIndex + 1;
    var str;
    str = num < 10 ? '0' + num : num;
    spanCurrentThird.textContent = str;
  });

  var spanAllFirst = document.querySelector('.js-gallery-first .js-all');
  var spanAllSecond = document.querySelector('.js-gallery-second .js-all');
  var spanAllThird = document.querySelector('.js-gallery-third .js-all');

  var num1 = firstSwiper.slides.length;
  var str1;
  str1 = num1 < 10 ? '0' + num1 : num1;
  spanAllFirst.textContent = str1;
  var num2 = secondSwiper.slides.length;
  var str2;
  str2 = num2 < 10 ? '0' + num2 : num2;
  spanAllSecond.textContent = str2;
  var num3 = thirdSwiper.slides.length;
  var str3;
  str3 = num3 < 10 ? '0' + num3 : num3;
  spanAllThird.textContent = str3;
}
})();
/*
const $slider = $("#slider");
$slider
	.on('init', () => {
		mouseWheel($slider)
	})
	.slick({
		vertical: true,
		infinite: false,
	})
function mouseWheel($slider) {
	$(window).on('wheel', { $slider: $slider }, mouseWheelHandler)
}
function mouseWheelHandler(event) {
	event.preventDefault();
  console.log('wheel');
	const $slider = event.data.$slider
	const delta = event.originalEvent.deltaY
	if(delta <= 0) {
		$slider.slick('slickPrev')
	}
	else {
		$slider.slick('slickNext')
	}
}
*/
