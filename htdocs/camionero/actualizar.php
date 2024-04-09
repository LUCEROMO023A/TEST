<?php

function actualizar_camionero($dni, $nombre, $telefono, $direccion,$salario,$poblacion)
{    
    include './conexion.php';
    $consulta = "UPDATE `camiones` SET `nombre` = '$nombre', `telefono` = '$telefono', `direccion` = '$direccion' WHERE `camionero`.`dni` = $dni;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}
