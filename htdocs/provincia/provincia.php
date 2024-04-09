<?php

function listar_provincia_por_codigo($codigo)
{
    include './conexion.php';
    $sql = "SELECT * FROM `provincia` WHERE `codigo` = $codigo";
    $resultado = mysqli_query($conexion, $sql);
    $provincia= mysqli_fetch_assoc($resultado);
    return $provincia;
}