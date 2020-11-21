<?php 
include ("conexion.php");

$consulta = mysqli_query($conexion, "SELECT * FROM `productos` ORDER BY ventas DESC LIMIT 12");

?>