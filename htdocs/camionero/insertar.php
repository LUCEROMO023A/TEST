<?php

function insertar_camionero($dni, $nombre, $telefono,$direccio,$salario,$poblacion)
{    
    include './conexion.php';
    $consulta = "INSERT INTO `camionero` (`nombre`, `telefono`, `direccion`, `salario`,'poblacion') VALUES (NULL, '$nombre', '$telefono', '$direccion','$salario','$poblacion');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}
