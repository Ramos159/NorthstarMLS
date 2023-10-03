import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

const PartnersCarousel = new Swiper('.partners-carousel',{
    direction: 'horizontal',
    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'custom',
        renderCustom: (swiper, current, total) => {
            return current + ' of ' + total;
        }
    },
    breakpoints: {
        767: {
            slidesPerView: 3,
            pagination: {
                type:'bullets',
                dynamicBullets: true,
                dynamicMainBullets: 1,
            }
        }
    },
    loop: true,
    slidesPerView: 1,
});