import router from './router';
import { createApp } from 'vue';
import './style.css';
import './styles/index.css';
import './styles/tokens.css';
import App from './App.vue';
import pinia from './stores';

const app = createApp(App);
app.use(pinia);
app.use(router);
app.mount('#app');
