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
