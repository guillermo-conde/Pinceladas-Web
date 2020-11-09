<?php 
//Valores para la conexion de la base  de datos
$host = "localhost";
$bd = "pinceladas";
$usuario = "root";
$contraseña = "";

//Método para establecer la conexion con la base de datos.
$conexion = mysqli_connect($host, $usuario, $contraseña, $bd);

mysqli_set_charset($conexion, "utf8");

?>