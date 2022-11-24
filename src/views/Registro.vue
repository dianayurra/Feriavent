<template>
    <section class="Registro">
                <h4>Formulario De Registro</h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre">
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellido">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
            <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Crear Contraseña">
            <input class="controls" type="password" name="contraseña2" id="contraseña2" placeholder="Repetir Contraseña">
            
            <input type="checkbox" name="terms" onclick="disableSending()">
                <label for="terms"><a href="./politicaprivacidad.html"> Acepto Términos y condiciones</a> </label>
                
            <input class="boton" type="submit" value= "Registrarse">
        
        

           
  </section>
</template>
<script setup>


const obtenerPaginas=async()=>{
    await fetch("/api/registro.php")
    .then(respuesta=> respuesta.json())
    .then(datos => paginas.value = datos)
  }
  obtenerPaginas()
</script>
<style scoped>
 @import url('registro.css');
</style>