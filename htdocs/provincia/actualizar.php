<?php

function actualizar_provincia($codigo,$nombre)
{    
    include './conexion.php';
    $consulta = "UPDATE `provincia` SET `nombre` = '$nombre',  WHERE `provincias`.`codigo` = $codigo;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}
