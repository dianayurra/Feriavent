<script>
import { defineComponent, provide,ref } from 'vue'
import { RouterLink, RouterView } from 'vue-router'
import Menu from './componentes/Menu.vue'
import OpcionesMenu from './componentes/OpcionesMenu.vue'
import Login from  './componentes/Login.vue'
export default defineComponent({
  components:{
    Menu,
    OpcionesMenu,
    Login
    
  },
  setup() {
    const abrir_menu = ref(false)
    const buscador = ref('')
    provide('buscador',buscador)
    provide('abrir_menu',abrir_menu)
    const categorias= ref ([
		{clase: "category_item", categoria: "all", icono: "", url: "/", nombre: "Todo"},
		{clase: "category_item", categoria: "Vestimenta", icono: "", url: "/vestimenta", nombre: "Vestimenta"},
	
		
		{clase: "category_item", categoria: "zapateria", icono: "", url: "/zapateria", nombre: "Zapateria"},

		{clase: "category_item", categoria: "audifonos", icono: "", url: "/audifonos", nombre: "Audifonos"},
    {clase: "category_item", categoria: "smartphones", icono: "", url: "/smartphones", nombre: "Smartphones"},
    {clase: "category_item", categoria: "Almacen", icono: "", url: "/almacen", nombre: "Almacen"},



	])
  const login = ref(true)
  return{ categorias,login}
  },
})
</script>


<template>
  <div class="category_list" v-if="login">
				<RouterLink v-for="(categoria,index) in categorias" :key="index"   :to="categoria.url" 
				class="category_item" category="all">
				{{categoria.nombre}}
			</RouterLink>
				
			</div>
  <Menu/>
  <OpcionesMenu/>
  <Login v-if="!login"/>
  <RouterView v-if="login"/>

</template>





<style>
@import url('./views/home.css');
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  nav a.router-link-exact-active {
    color: var(--color-text);
  }

  nav a.router-link-exact-active:hover {
    background-color: transparent;
  }

</style>
