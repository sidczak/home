import Vue from 'vue';
import VueRouter from 'vue-router';
import vueCustomElement from 'vue-custom-element';

import '../css/home.scss';

import App from './App';

new Vue({
    el: '#app',
    render: h => h(App)
});

import ExampleComponent from './components/ExampleComponent.vue';
import HeadingGroup from './components/HeadingGroup.vue';
import EduCounter from './edu-components/EduCounter.vue';
import EduSlideshow from './edu-components/EduSlideshow.vue';

// Vue.config.ignoredElements = [
//   'example-component'
//	 'heading-group'
//   'edu-counter'
// ];

Vue.use(vueCustomElement);

Vue.customElement('example-component', ExampleComponent);
Vue.customElement('heading-group', HeadingGroup);
Vue.customElement('edu-counter', EduCounter);
Vue.customElement('edu-slideshow', EduSlideshow);