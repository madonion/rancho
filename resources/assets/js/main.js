
import Vue from 'vue';


import VueResource from 'vue-resource';


import  Moment from  'moment';



var fittext  = require('./jquery.fittext.js');

var lettering  = require('./jquery.lettering.js');

window.Vue = Vue;

window.moment = Moment;


Vue.use(VueResource);

import PackageSelector from './PackageSelector.vue';

new Vue({
    el: '#vue',
    components:{PackageSelector}
});