require('./bootstrap');
import Vue from 'vue'

window.Vue = Vue
Vue.component(
     'partner-slides',
     require('./components/partners.vue').default
);
Vue.component(
     'carousel-cover',
     require('./components/carousel.vue').default
);

const app = new Vue({
     el: '#app',
});

import Splide from '@splidejs/splide'
import EmblaCarousel from "embla-carousel";


window.EmblaCarousel = EmblaCarousel;

new Splide('.splide').mount();

