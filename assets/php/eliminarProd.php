<?php 
if ($_SERVER['REQUEST_METHOD']){ //Validacion que se reciban datos.

	//Asignacion de los datos recibidos a variables.
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];

	//Validamos que el usuario ingreso todos los campos.
	//Cargando la informacion en la base de datos.
	include("conexion.php"); //Archivo que establece la conexion.
	mysqli_query($conexion, "DELETE FROM productos WHERE id='$id'");//Registro de las variables en la base de datos.
	unlink('../img/'.$nombre.'.jpg',); 
	echo'<script type="text/javascript">
	   alert("Producto ELIMINADO correctamente.");
	   window.location.href="../../panel.php"; //Para regresar al origen
	</script>';
} 
?>