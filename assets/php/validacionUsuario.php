<?php 
require('conexion.php');

$usuario = $_POST['usuario'];
$contrasena = $_POST['password'];

$validacion = mysqli_query($conexion, "SELECT COUNT(*) AS conteo FROM usuarios WHERE usuario = '$usuario' AND password = '$contrasena'");

$validacion = mysqli_fetch_array($validacion);

?>