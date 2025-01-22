// Import Swiper JS
import Swiper from 'swiper/bundle';
// Import Swiper styles
import 'swiper/css/bundle';

if(document.getElementById('team-slider')){
  const team  = new Swiper('#team-slider', {
    loop: true,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: true,
    breakpoints: {
      1280: {
          slidesPerView:3,
          //centeredSlides:true
      },
      992: {
          slidesPerView:2,
          //centeredSlides:true
      },
      768: {
        slidesPerView:1.5,
        //centeredSlides:true
      }
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

if(document.getElementById('full-posts-slider')){
  const fullPostsSlider  = new Swiper('#full-posts-slider', {
    loop: true,
    slidesPerView: 1.2,
    spaceBetween: 20,
    autoplay: true,
    breakpoints: {
      1500: {
        slidesPerView:5.5,
       
      },
      1280: {
          slidesPerView:4.5,
      },
      992: {
          slidesPerView:3.5,
      }
    },
    // Navigation arrows
    navigation: {
      nextEl: '.thumb-next',
      prevEl: '.thumb-prev',
    },
  });
}