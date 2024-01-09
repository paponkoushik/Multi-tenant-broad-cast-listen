
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('notification', require('./components/Notification.vue').default);

const app = new Vue({
    el: '#app',
});
