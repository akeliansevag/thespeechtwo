// Import Swiper JS
import Swiper from 'swiper/bundle';
// Import Swiper styles
import 'swiper/css/bundle';

let teamSliderDesktop;
let teamSliderMobile;

if(document.getElementById('team-slider-desktop')){
  teamSliderDesktop = new Swiper('#team-slider-desktop',{
    init: false,
    slidesPerView: 1,
    spaceBetween: 15,
    grabCursor: true,
    autoplay: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
  });
}

if(document.getElementById('team-slider-mobile')){
  teamSliderMobile = new Swiper('#team-slider-mobile',{
    init: false,
    slidesPerView: 1.5,
    spaceBetween: 15,
    grabCursor: true,
    autoplay: true,
  });
}


function initializeSwiper() {
  if (window.innerWidth >= 992) {
    if(teamSliderDesktop){
      teamSliderDesktop.init();
    }
      
  } else if (window.innerWidth < 992) {
    if(teamSliderMobile){
      teamSliderMobile.init();
    }
  }
}

// Initialize Swiper on page load
initializeSwiper();

// Listen for window resize events
window.addEventListener('resize', function () {
  initializeSwiper();
});