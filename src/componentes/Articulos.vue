<template>
    <div class="contenedor mt-5">
      <div class="row">
  
        <div class="col-12 articulos row">
        <div v-for= "(articulo,index) in datos" :key="index"
          class="card col-4" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFZ_8wIsLLBKFMkqWPYB7y5kfZlaSDLxkHxKbm9DXBpjoBaBCUH9ZVGdbaLIjeqnySGdg&usqp=CAU">
            <div class="card-body">
              <h5 class="card-title">{{articulo.nombre}}</h5>
              <p class="card-text">{{articulo.descripcion}} $ {{articulo.precio}}
                </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          {{ datos}}
        </div>
      </div>
    </div>
  </template>
  <script>
  import { defineComponent, ref, inject } from "vue";
  
  export default defineComponent({
    setup() {
      const datos = ref([])
      const articulos = async () => {
        await fetch("http://192.168.4.103:4000")
          .then(respuesta => respuesta.json())
          .then(data => datos.value = data);
      };
      articulos();
      const buscador= inject('buscador')
      return { datos, buscador }
    },
  });
  </script>
  <style scoped>
      .articulos{
       
      }
  
  </style>
  