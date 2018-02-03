
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router');
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)
// console.log(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('home', require('./components/HomeComponent.vue'));
Vue.component('ceshi', require('./components/CeshiComponent.vue'));

const routes = [
    {path:'/',component:{template:'<home></home>'}},
    {path:'/ceshi',component:{template:'<ceshi></ceshi>'}},
]

const router = new VueRouter({routes});


const app = new Vue({
    el: '#app',
    router
});
