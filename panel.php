<?php 

session_start();

require('assets/php/conexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['password'];

	$validacion = mysqli_query($conexion, "SELECT COUNT(*) AS conteo FROM usuarios WHERE usuario = '$usuario' AND password = '$contrasena'");

	$validacion = mysqli_fetch_array($validacion);

	if ($validacion['conteo']>0) {
		$_SESSION['username'] = $usuario;
	} else {
		echo'<script type="text/javascript">
		   alert("Datos Incorrectos");
		</script>';
	}	
}


if (isset($_SESSION['username'])) {
	$_SESSION['username'];
	require('assets/views/vistaPanel.php');
} else{
	require('assets/views/vistaLogin.php');
}

?>