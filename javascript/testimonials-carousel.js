import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

const TestimonialCarousel = new Swiper('.testimonials-carousel',{
    direction: 'horizontal',
    modules: [Navigation],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swipper-button-prev',
    },
    loop: true,
});