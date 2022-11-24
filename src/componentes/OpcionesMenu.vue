<template>
    <div class="menu" v-if="abrir_menu">
        <div class="opciones">
            {{paginas }}
            <nav>
               <router-link :to="pagina.url" v-for="(pagina, index) in paginas[1]" 
                :key="index" class="botones">
                    <img :src="`${pagina.icono}`" class="icono">
                    {{ pagina.nombre}}
                </router-link>
                {{ paginas }}
            </nav>
        </div>
        <div class="cerrar_menu" @click="abrir_menu=false">
            
        </div>
    </div>
</template>
<script setup>
  import { inject, ref } from "@vue/runtime-core";
  const abrir_menu =   inject('abrir_menu')
 const paginas = ref([])

  const obtenerPaginas=async()=>{
    await fetch("/api/menu.php")
    .then(respuesta=> respuesta.json())
    .then(datos => paginas.value = datos)
  }
  obtenerPaginas()
</script>
<style scoped>
    .menu{
        position: fixed;
        top: 87px;
        width: 100%;
        height: 100vh;
        display: flex;
        z-index: 0;
    }
    .opciones{
        width: 15%;
        height: 100%;
        background-image: linear-gradient(
            to top,
            rgba(220, 229, 233, 0.9),
             rgba(196, 217, 228, 0.9)
        );
        box-shadow: 1px 1px 1px rgb(175, 174, 174),
        2px 2px 2px rgb(105, 105, 105),
        3px 3px 1px black;
    }
    .cerrar_menu{
        width: 60%;
        height: 100%;
        bottom: 80px;
        
    }
    .botones{
        width: 100%;
        height: 50px;
        border-bottom: 2px solid white;
        display: flex;
        align-items: center;
        color: white;
        text-decoration: none;
        padding-left: 20px;
    }
    .icono{
        margin-right: 30px;
        width: 30px;
        height: 30px;
    }
</style>