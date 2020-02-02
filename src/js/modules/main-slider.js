(function() {
  /*
  var swiper = new Swiper('.gallery__main-slider', {
       direction: 'vertical',
       slidesPerView: 1.5,
       mousewheelControl: true,
       parallax: true,
       speed: 600,
    onlyExternal:true
   });
*/
var miniSwipers = Array.from(document.querySelectorAll('.gallery__img--slider .swiper-container'));
var jsMiniSwipers = [];
if (miniSwipers.length !== 0) {

  miniSwipers.forEach(function(item, i) {

    jsMiniSwipers.push(new Swiper(item, {
    pagination: {
      el: '.gallery__img--slider .swiper-pagination',
      //type: 'progressbar',
    },
    //onlyExternal:true
  }));
});

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
