<?php

function conectate (&$conexion)
{
    $servidor = "https://databases-auth.000webhost.com/sql.php?server=1&db=id3712707_plataformataxi&table=conductores&pos=0&token=88d94de1579de06bb85359391a89d76b";
    $basededatos = "id3712707_plataformataxi";
    $usuario = "id3712707_administrador";
    $clave = "sena1318333";
    $conexion = mysqli_connect($servidor, $usuario,$clave,$basededatos)or die (mysqli_error($conexion));//Conexion base de datos
}
?>
