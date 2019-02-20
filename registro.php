<?php
error_reporting(0);
require_once ('conectarse.php');
conectate($conexion);
 
$imei=$_POST ['imei'];
$nombre=$_POST ['nombre'];
$placa=$_POST ['placa'];
$clave=$_POST ['clave'];
$cedula=$_POST ['cedula'];
      
$registro=mysqli_query ($conexion,"INSERT INTO conductores  VALUES ('$imei', '$nombre', '$placa', '$clave','$cedula')");
       if($registro)
          {
           echo "Registrado";
          }
          else
            {
            echo "Error";
            }
?>