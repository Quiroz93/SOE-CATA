import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'welcome',
    component: () => import('@/features/welcome.vue') // lazy load
  },
  {
    path: '/programas',
    name: 'programas',
    component: () => import('@/features/programas/views/ProgramasView.vue') // lazy load
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router