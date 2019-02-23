<?php

$conectar=@mysql_connect('mysqli.000webhost.com','DesarrolladoresJava','DesarrolladoresJava','1318333');

if(!$conectar){
	echo"No se pudo Conectar con el Servidor";
}else{
	$base=mysql_select_db('paginaweb');
	if (!$base) {
		echo"No se encontro la base de datos";
	}
}
//recupera variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	$sql="INSERT INTO datos VALUES('$nombre','$correo',$mensaje')";
	//sentecia sql
	$ejecutar=mysql_query($sql);

	if(!$ejecutar){
		echo"Se presento un error";
	}else{
		echo"Datos guardados correctamente<br><a href='index.html'>Volver</a>";
	}
?>
