import { createApp } from 'vue';
import App from './App.vue'
import router from './router'


//const app = createApp(App);
//app.use(Vue.use(VueAxios, axios));

createApp(App).use(router).mount('#app')
