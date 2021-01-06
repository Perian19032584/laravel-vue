require('./bootstrap');

window.Vue = require('vue'); // Оно не хочет на это смотреть:) | ошибка npm run dev

Vue.component('navbar', require('./components/App.vue').default);


import router from "./router";

const app = new Vue({
    el: '#app',
    router: router,
});

