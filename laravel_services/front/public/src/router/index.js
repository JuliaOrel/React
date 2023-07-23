import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'public.home',
      component: ()=>import('@/views/HomeView.vue')
    },
    {
      path: '/socket',
      name: 'socket',
      component: ()=>import('@/views/Socket.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('@/views/AboutView.vue')
    }
  ]
})

export default router
