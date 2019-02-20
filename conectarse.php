<?php

function conectate (&$conexion)
{
    $servidor = " Localhost via UNIX socket";
    $basededatos = "id3712707_plataformataxi";
    $usuario = "id3712707_administrador";
    $clave = "sena1318333";
    $conexion = mysqli_connect($servidor, $usuario,$clave,$basededatos)or die (mysqli_error($conexion));//Conexion base de datos
}
?>
