import Swiper from 'swiper';
import {Navigation} from 'swiper/modules';

const ImageContentCarousel = new Swiper('.testimonial-carousel-swiper',{
    //direction: 'horizontal',
    modules: [Navigation],
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
          
        }
    },
    loop: true,
});
