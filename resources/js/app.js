require('./bootstrap');
import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en'

Vue.use(ElementUI, { locale })
window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('student-form-component', require('./components/student/StudentFormComponent.vue').default);


const app = new Vue({
    el: '#vue-app',
});
