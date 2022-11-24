<template>
    <div class="titulo">
      
        <div class="boton">
            <button @click="abrir_menu = true"> </button>
         
        </div>
        <div class="buscador">
            <input type="search" placeholder="Buscar..." class="buscar" v-model="buscador">
            <button class="boton_buscar"></button>
            
        </div>
        <div class="notificaciones">
            
          
            
            <button class="notificacion"></button>
            <img class= "logo" src="/logo.jpeg" alt="">
        </div>
    </div>
  

     
     
</template>
<script>
import { defineComponent, inject,ref } from 'vue'

export default defineComponent({
    setup() {
        const abrir_menu = inject('abrir_menu')
        const buscador= inject('buscador')
        return{abrir_menu,buscador}
    },
})


</script>

<style scoped>
    .titulo{
        width: 100%;
        height: 70px;
        background-image: linear-gradient(
        to top,
        rgb(250, 226, 7),
        rgb(236, 233, 14)
        );
        box-shadow: 1px 1px 2px rgb(185, 185, 186),
        2px 2px 2px rgb(157, 157, 159),
        3px 3px 2px rgb(138, 138, 138),
        4px 4px 2px rgb(109, 109, 110),
        5px 5px 1px rgb(0, 0, 0);
        display: grid;
        position: absolute;
        grid-template-columns: repeat(12,1fr);
    }
    .logo{

border: none;
padding: 0px;
background: none;
cursor: pointer;
font-size: 40px;
border-radius: 100px;
width: 60px;
height: 60px;
margin-right:20px ;

}

    .boton{
        grid-column-start: 1;
        grid-column-end: 5;
        display: flex;
        align-items: center;
    }
    .boton button{
        width: 50px;
        height: 50px;
        margin-left: 15px;
        margin-top: 10px;
        background-image: url('/menu.svg');
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border:none;
        
    }
    .buscador{
        grid-column-start: 5;
        grid-column-end: 9;
        display: flex;
        align-items: center;
        justify-content:center;
        
    }
    .boton_buscar{
        width: 35px;
        height: 35px;
        background-image: url('./lupa.svg');
        background-color: transparent;
        border: none;
       
        
    }
    .buscar{
        width: 95%;
        height: 35px;
        border-radius: 5px;
        margin-right: 5px;
    }
    .notificaciones{
        grid-column-start: 9;
        grid-column-end: 13;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .texto{
       
       color: rgb(8, 8, 8);
    }
    .notificacion{
        width: 40px;
        height: 40px;
        background-color: transparent;
        border: none;
        background-image: url('/campana.svg');
        background-size: 100% 100%;
    }
    
</style>