require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponentVue from './components/ExampleComponent.vue';


const example = createApp(ExampleComponentVue);
example.mount('#example');












// import store from './store';
// app.use(store)