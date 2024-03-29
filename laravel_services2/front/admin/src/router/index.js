import { createRouter, createWebHistory } from 'vue-router'
import myLog from "@/helpers/myLog";
import {useAuthStore} from "@/stores/auth.store";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'dashboard',
      component: () => import('@/views/DashBoardView.vue')
    },
    {
      path: '/users',
      name: 'users',
      component: () => import('@/views/UserView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('@/views/LoginView.vue')
    },
    {
      path: '/email',
      name: 'email',
      component: () => import('@/views/SendTestEmailView.vue')
    }
  ]
})

router.beforeEach((to, from, next) => {

  const authStore = useAuthStore()
  //Таким образом фронт защищает и не показывает страницы незалогиненному пользователю
  // Если я пришел на страницу логина - то иду дальше
  if(to.fullPath === '/login') {
    next()
  }

  // На все остальные страницы я могу попасть только в том случае, если я залогинен
  if(! authStore.isAdmin) {
    myLog('go Login')
    next('login')
  } else {
    myLog('go Page')
    next()
  }
});

export default router
