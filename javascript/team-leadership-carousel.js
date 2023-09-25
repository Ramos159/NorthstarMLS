import Swiper from 'swiper';
import { Navigation, EffectCoverflow} from 'swiper/modules';

const TeamLeadershipCarousel = new Swiper('.team-leadership-carousel',{
    direction: 'horizontal',
    modules: [Navigation, EffectCoverflow],
    effect: 'coverflow',
    coverflowEffect: {
        slideShadows: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swipper-button-prev',
    },
    loop: true,
});