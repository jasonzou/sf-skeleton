import Vue from 'vue';
import VueRouter from 'vue-router';

// app specific
import router from './router/';
import app from './app';
require('../sass/admin-lte.scss'); 
Vue.use(VueRouter);
  
// bootstrap the app
let demo = new Vue({
    el: '#vueApp',
    router, 
    template: '<app/>',
    components: { app }
})
