<template>
    <h1 id="hTitulo">Vender</h1>
    <div id="nuevaPub" class="bordes">
        <label for="titulo">NombreProducto</label>
        <input type="text" name="Nombre del producto" id="Nombre del producto">
       <br><br>
        <label for="titulo">Precio</label>
        <input type="text" name="precio" id="precio">

        <br><br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
    </div>
    
    <div id="pubImagenes" class="bordes">
        <label for="archivoImagen">Seleccione Imágenes:</label>
        <br><br>
        <input type="file" name="archivoImagen" id="archivoImagen" accept="image/png, image/gif, image/jpeg" multiple>
        <br><br>
        <div id="vistaPrevia" class="bordes" >
        </div>
    </div>
    
    <button id="btnSubir">Publicar</button>
    
</template>
<style scoped>
html, body{
    width: 100%;
    height: 100%;
    padding: 0px;
    margin: 0px;
    font-size: 25px;
    font-family: 'lora', serif;
    
   
}

.bordes{
    border-radius: 50px;
    border: 3px solid black;
    padding: 20px;
    font-family: 'lora', serif;
}


#nuevaPub{
    position: relative;
    width: 80%;
    left: 10%;
    
}

#nuevaPub label{
    display: inline-block;
    width: 50%;
    background-color: yellow;
}

#nuevaPub input[type=text] {
    display: inline-block;
    width: 80%;
  
}

#hTitulo{
    font-family: 'lora', serif;
    color: rgb(20, 20, 22);
    font-size: 30px;
}
#vistaPrevia{
    position: relative;
    width: 95%;
    overflow: auto;
}

#pubImagenes{
    position: relative;
    top: 10px;
    width: 80%;
    left: 10%;
 
}

.foto{
    float: left;
    position: relative;
    margin-left: 15px;
}

#btnSubir{
    position: relative;
    width: 20%;
    height: 10%;
    top: 20px;
    left: 40%;
    font-size: larger;
    font-family: 'lora', serif;
    color: blue;
}
</style>