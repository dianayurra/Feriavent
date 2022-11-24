<?php

$respuesta->datos = array();
                
//Mediante un 'foreach' recorremos las filas de registros del resultado...
foreach($resultado as $fila){
    //...Por cada fila, creamos un nuevo objeto de clase usuario...
    $usuario = new Usuario();

    //...y le asignamos los datos contenidos en la fila
    $usuario->nombre = $fila['nombre'];
    $usuario->ci = $fila['ci'];
    $usuario->fecha_nac = $fila['fecha_nac'];
    $usuario->email = $fila['email'];

    //Finalmente agregamos el objeto de clase usuario al array de datos
    array_push($respuesta->datos, $usuario);
}
$json = TransformarEnJSON($respuesta);

    //6 - Entregamos la respuesta
    MostrarJSON($json); 

?>