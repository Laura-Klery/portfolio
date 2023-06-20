import './assets/css/style.css'

import { createApp } from 'vue'
import router from './router'

import App from './App.vue'
import TheHeader from '@/components/TheHeader.vue'
import TheFooter from '@/components/TheFooter.vue'

const app = createApp(App)
  .use(router)
  .component('the-header', TheHeader)
  .component('the-footer', TheFooter)
  .mount('#app')