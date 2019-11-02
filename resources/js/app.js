require('./bootstrap');

window.Vue = require('vue');

Vue.component('thought-c', require('./components/thought.vue').default);
Vue.component('nuevo-c', require('./components/nuevo.vue').default);


const app = new Vue({
    el: '#app',
    //components:{thought,nuevo},
});