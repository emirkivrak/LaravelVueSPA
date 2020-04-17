/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

// vue ve vue routeri dahil ettik
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)




// hangi rotada hangi component kullanılacağını belirttik
let routes = [
    { path: '/foo', component: require('./components/foo.vue').default },
    { path: '/bar', component: require('./components/bar.vue').default }
]

//// route dizisindeki rotaları kullan
const router = new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'active'
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});