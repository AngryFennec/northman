//var mySwiper = new Swiper('.swiper-container', {
/*
  direction: 'vertical',
          slidesPerView: 1,
          spaceBetween: 50,
          mousewheel: {
            sensitivity: 100,
          },
speed: 1,

});

console.log(mySwiper.mousewheel.enabled);
*/
var swiper = new Swiper('.swiper-container', {
       pagination: '.swiper-pagination',
       direction: 'vertical',
       slidesPerView: 1,
       paginationClickable: true,
       mousewheelControl: true,
       parallax: true,
       speed: 600,
centeredSlides: true,


   });
