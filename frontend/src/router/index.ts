import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';
import MainLayout from '../layouts/MainLayout.vue';
import ProgramasList from '../features/programas/ProgramasList.vue';
import ProgramaDetail from '../features/programas/ProgramaDetail.vue';

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    component: MainLayout,
    children: [
      {
        path: 'programas',
        component: ProgramasList,
      },
      {
        path: 'programas/:slug',
        component: ProgramaDetail,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
