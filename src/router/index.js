import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import LoginView from '../views/LoginView.vue';
import RegisterView from '../views/RegisterView.vue';
import UserLoginView from '../views/UserLoginView.vue';
import DatabaseView from '../views/DatabaseView.vue';
import LoginCollab from '../views/LoginCollaboratorView.vue';
import Collabusar from '../views/CollaboratorView.vue';
import Collabregister from '../views/RegisterCollaboratorView.vue';
import Postcreate from '../views/PostcreateView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView

    },
    {
      path: '/register',
      name: 'register',
      component: RegisterView

    },
    {
      path:'/user',
      name: 'userLogin',
      component:UserLoginView

    },
    {
      path : '/database',
      name : 'Database',
      component: DatabaseView
    },
    {
      path : '/collab/login',
      name : 'collablogin',
      component: LoginCollab
    },
    {
      path : '/collabuser',
      name : 'collabuser',
      component: Collabusar
    },
    {
      path:'/collabregister',
      name: 'collabregister',
      component : Collabregister
    },
    {
      path:'/postcreate',
      name: 'postcreate',
      component : Postcreate
    }
  ]
})

export default router
