<?php

/* CLASES */
    
/**
 * Clase para contener una conexión a la base de datos.
 * Incluye el estado de la misma y los posibles mensajes de error.
 */
class BaseDeDatos{
    public $conexion;
    public $estado;
    public $mensaje;
}


/**
 * Clase para contener resultados de la base de datos
 */

 class Resultado{
     public $estado;
     public $datos;
 }

 /**
  * Clase para contener una publicación
  */

  class Publicacion{
      public $id;
      public $nombre;
      public $ruta_imagen;
      public $precio;
      public $descripcion;
      
  }
class Sesion{
    public $id;
    public $sal;
    public $hash;
    public $nombre;
    
}
  /**
   * Clase para contener los datos de imágenes
   */

   class Imagen{
       public $id;
       public $ruta;
   }
   class Menu{
    public $nombre_menu;
    public $icono_menu;
    public $id;
    public $ruta_menu;

   }

?>