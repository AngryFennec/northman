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
var firstSwiper = new Swiper('.js-gallery-first .swiper-container', {
pagination: {
  el: '.swiper-pagination-first',
    type: 'progressbar',
},
//onlyExternal:true
});
var secondSwiper = new Swiper('.js-gallery-second .swiper-container', {
pagination: {
  el: '.swiper-pagination-second',
  type: 'progressbar',
},
//onlyExternal:true
});

var spanCurrentFirst = document.querySelector('.js-gallery-first .js-current');
firstSwiper.on('slideChange', function () {
  var num = firstSwiper.activeIndex+1;
  var str;
  str = num < 10 ? '0' + num : num;
  spanCurrentFirst.textContent = str;
});

var spanCurrentSecond = document.querySelector('.js-gallery-second .js-current');
secondSwiper.on('slideChange', function () {
  var num = secondSwiper.activeIndex+1;
  var str;
  str = num < 10 ? '0' + num : num;
  spanCurrentSecond.textContent = str;
});

var spanAllFirst = document.querySelector('.js-gallery-first .js-all');
var spanAllSecond = document.querySelector('.js-gallery-second .js-all');
console.log();
var num1 = firstSwiper.slides.length;
var str1;
str1 = num1 < 10 ? '0' + num1 : num1;
spanAllFirst.textContent = str1;
var num2 = secondSwiper.slides.length;
var str2;
str2 = num2 < 10 ? '0' + num2 : num2;
spanAllSecond.textContent = str2;
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
