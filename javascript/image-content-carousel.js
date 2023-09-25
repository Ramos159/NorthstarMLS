import Swiper from 'swiper';
import { Pagination, EffectCoverflow} from 'swiper/modules';

const ImageContentCarousel = new Swiper('.image-content-carousel',{
    direction: 'horizontal',
    modules: [Pagination, EffectCoverflow],
    effect: 'coverflow',
    coverflowEffect: {
        slideShadows: false,
    },
    breakpoints: {
        768: {
            direction: 'vertical',
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    loop: true,
});
