import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

import Vender from '../views/Vender.vue'

import Registro from '../views/Registro.vue'
import PaginaPrincipal from '../views/PaginaPrincipal.vue'
import Dinamica from '../views/Dinamica.vue'
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },

  {
   path: '/Vender',
   name: Vender,
   component:Vender
  },

  
  {
    path: '/Registro',
    name: Registro,
    component: Registro
  },
  {
    path: '/PaginaPrincipal',
    name: PaginaPrincipal,
    component: PaginaPrincipal
  },
   
    {
      path:"/categorias/:nombre",
      name:"dinamica",
      component:Dinamica
    }
  ]
})

export default router
