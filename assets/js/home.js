import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './App';
import '../css/home.scss';

new Vue({
    el: '#app',
    render: h => h(App, {
    	props: {
    		endpoint: "http://code.eduweb.pl/kurs-vue/images/?wait=1"
    	}
    })
});