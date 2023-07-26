import './assets/css/style.css'

import { createApp } from 'vue'
import router from './router'

import App from './App.vue'
import TheHeader from '@/components/layout/TheHeader.vue'
import TheFooter from '@/components/layout/TheFooter.vue'

const app = createApp(App)
  .use(router)
  .component('the-header', TheHeader)
  .component('the-footer', TheFooter)
  .mount('#app')