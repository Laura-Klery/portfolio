import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MentionsView from '../views/MentionsView.vue'


const routes = [
  {
    path: '/',
    name: 'Accueil',
    component: HomeView,
  },
  {
    path: '/mentions-legales',
    name: 'Mentions Légales',
    component: MentionsView,
  }
]
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

export default router
