require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponentVue from './components/ExampleComponent.vue';
import AboutComponentVue from './components/AboutComponent.vue';


const example = createApp(ExampleComponentVue);
example.mount('#example');

const about = createApp(AboutComponentVue);
about.mount('#about');













// import store from './store';
// app.use(store)