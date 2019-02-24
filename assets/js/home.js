import Vue from 'vue';
//import VueRouter from 'vue-router';
import vueCustomElement from 'vue-custom-element';

import '../css/home.scss';

import App from './App';
//import store from './store/store';
//import router from './router/router';

new Vue({
    el: '#app',
    //store,
    //router,
    render: h => h(App)
});

import ExampleComponent from './components/ExampleComponent.vue';
import EduCounter from './edu-components/EduCounter.vue';
import EduSlideshow from './edu-components/EduSlideshow.vue';

import EduHelloWorld from './edu-components/EduHelloWorld.vue';
import EduHeadingGroup from './edu-components/EduHeadingGroup.vue';
import EduUser from './edu-components/EduUser.vue';
import EduProduct from './edu-components/EduProduct.vue';
import EduUserList from './edu-components/User/EduUserList.vue';
import EduApp from './edu-components/EduApp.vue';

// Vue.config.ignoredElements = [
//   'example-component'
//   'edu-counter'
// ];

Vue.use(vueCustomElement);

Vue.customElement('example-component', ExampleComponent);
Vue.customElement('edu-counter', EduCounter);
Vue.customElement('edu-slideshow', EduSlideshow);

Vue.customElement('edu-hello-world', EduHelloWorld);
Vue.customElement('edu-heading-group', EduHeadingGroup);
Vue.customElement('edu-user', EduUser);
Vue.customElement('edu-product', EduProduct);
Vue.customElement('edu-user-list', EduUserList);
Vue.customElement('edu-app', EduApp);
