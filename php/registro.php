<?php

include_once "funciones.php";
include_once "clases.php";
$info = new Resultado;
$info->estado = "";
$info->datos= "";

$info = Opcionessesion();
$json = TransformarEnJSON($info);
MostrarJSON($json);





 /**
     * Permite obtener el listado de publicaciones almacenadas en el servidor
     */
    function Opcionessesion(){
        $basededatos = CrearConexion();
        $resultado = new Resultado;

        //Chequeamos posibles errores en la conexión a la BdD
        if ($basededatos->estado == "ERROR") {
            $resultado->estado = $basededatos->estado;
            $resultado->datos = $basededatos->mensaje;
        }
        else {
            $consulta = "SELECT * from sesion ";
            $respuesta = $basededatos->conexion->query($consulta);
            
            if ($respuesta->num_rows > 0) {
                $resultado->estado = "OK";
                $resultado->datos = array();
                
                while ($fila = $respuesta->fetch_assoc()) {
                    $sesion = new sesion;
                    
                    $sesion->id = $fila['id'];
                 
                    $sesion->sal = $fila['sal'];
                    $sesion->hash = $fila['hash'];
                    $sesion->nombre = $fila['nombre'];
                    
                   
                 
                    //Esta función no obtiene las imágenes.
                    $publicacion->imagenes = "";

                    array_push($resultado->datos,$sesion);
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
