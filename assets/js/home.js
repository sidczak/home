import Vue from 'vue';
import VueRouter from 'vue-router';
import vueCustomElement from 'vue-custom-element';

import '../css/home.scss';

import App from './App';


//ustawienia dla slideshow
import routes from './routes/Routes';
const router = new VueRouter({
    routes
});
Vue.use(VueRouter);


new Vue({
    el: '#app',
    router,
    render: h => h(App, {
        props: {
            endpoint: "http://code.eduweb.pl/kurs-vue/images/?wait=1"
        }
    })
});
//end ustawienia dla slideshow


import ExampleComponent from './components/ExampleComponent.vue';
import HeadingGroup from './components/HeadingGroup.vue';
import EduCounter from './components/EduCounter.vue';

// Vue.config.ignoredElements = [
//   'example-component'
//	 'heading-group'
//   'edu-counter'
// ];

Vue.use(vueCustomElement);

Vue.customElement('example-component', ExampleComponent);
Vue.customElement('heading-group', HeadingGroup);
Vue.customElement('edu-counter', EduCounter);