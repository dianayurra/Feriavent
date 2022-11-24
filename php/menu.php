<?php
include_once "funciones.php";
include_once "clases.php";
$info = new Resultado;
$info->estado = "";
$info->datos= "";

$info = OpcionesMenu();
$json = TransformarEnJSON($info);
MostrarJSON($json);





 /**
     * Permite obtener el listado de publicaciones almacenadas en el servidor
     */
    function OpcionesMenu(){
        $basededatos = CrearConexion();
        $resultado = new Resultado;

        //Chequeamos posibles errores en la conexión a la BdD
        if ($basededatos->estado == "ERROR") {
            $resultado->estado = $basededatos->estado;
            $resultado->datos = $basededatos->mensaje;
        }
        else {
            $consulta = "SELECT nombre_menu, icono_menu, id, ruta_menu from Menu ";
            $respuesta = $basededatos->conexion->query($consulta);
            
            if ($respuesta->num_rows > 0) {
                $resultado->estado = "OK";
                $resultado->datos = array();
                
                while ($fila = $respuesta->fetch_assoc()) {
                    $menu = new Menu;
                    
                    $menu->nombre_menu = $fila['nombre_menu'];
                 
                    $menu->icono_menu = $fila['icono_menu'];
                    $menu->id = $fila['id'];
                    
                    $menu->ruta_menu = $fila['ruta_menu'];
                 
                    //Esta función no obtiene las imágenes.
                    $publicacion->imagenes = "";

                    array_push($resultado->datos,$menu);
                }
                
                
            }
            else {
                $resultado->estado = "OK";
                $resultado->datos = "No se encontraron registros";
               
                
                
                
                
            }
        }

        $basededatos->conexion->close();
        return $resultado;
  
    }

    /**
 * Crea una nueva conexión a la base de datos en un objeto.
 */
function CrearConexion(){
    $servidor="localhost";
    $usuario="alumno";
    $password="alumno";
    $bdd="feriavent";

    $basededatos = new BaseDeDatos;

    $basededatos->conexion = new mysqli($servidor, $usuario, $password, $bdd);
    $basededatos->estado = "OK";
    $basededatos->mensaje = "OK";

    if ($basededatos->conexion->connect_error) {
        $basededatos->estado = "ERROR";
        $basededatos->mensaje = $basededatos->conexion->connect_error;
        return $basededatos;
        exit(1);
    }
    return $basededatos;
}
?>


    