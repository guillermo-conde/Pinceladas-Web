<?php 
if ($_SERVER['REQUEST_METHOD']){ //Validacion que se reciban datos.
	include ("obteniendoEnumCateg.php");

	//Asignacion de los datos recibidos a variables.
	$id = $_POST['id'];
	$nombre = $_POST['nombre']; 
	$precio = $_POST['precio'];
	$ventas = $_POST['ventas'];
	$categoria = $_POST['categoria'];
	$subcategoria = $_POST['subcategoria'];
	$descripcion = $_POST['descripcion'];

	//Validamos que el usuario ingreso todos los campos.
		if (!empty($nombre)){
			if (!empty($precio)){
					if (!empty($descripcion)) {
						if ($categoria == 'Fechas especiales') {
							include('obteniendoEnumCateg.php');
							// Convertimos la categoria a enum
							for ($i=0; $i < count($enumCateg) ; $i++) { 
								if ($enumCateg[$i]==$categoria) {
									$categoria = $i+1;
									break;
								}
							}

							include('obteniendoEnumSubcateg.php');
							for ($j=0; $j < count($enumSub) ; $j++) { 
								if ($enumSub[$j]==$subcategoria) {
									$subcategoria = $j+1;
									break;
								}
							}

							//Cargando la informacion en la base de datos.
							include("conexion.php"); //Archivo que establece la conexion.
							mysqli_query($conexion, "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', ventas='$ventas', categoria='$categoria', subcategoria='$subcategoria' WHERE id='$id'");//Registro de las variables en la base de datos.
						}else {
							include('obteniendoEnumCateg.php');
							// Convertimos la categoria a enum
							for ($i=0; $i < count($enumCateg) ; $i++) { 
								if ($enumCateg[$i]==$categoria) {
									$categoria = $i+1;
									break;
								}
							}
							//Cargando la informacion en la base de datos.
							include("conexion.php"); //Archivo que establece la conexion.
							mysqli_query($conexion, "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', ventas='$ventas', categoria='$categoria', subcategoria=NULL WHERE id='$id'");//Registro de las variables en la base de datos.
						}

						
						echo'<script type="text/javascript">
						   alert("Producto actualizado correctamente.");
						   window.location.href="../../panel.php"; //Para regresar al origen
						</script>';
					}else {
						echo'<script type="text/javascript">
						   alert("No ingresó la descripcion del producto");
						   window.location.href="../../panel.php";
						</script>';
					}
			} else {
				echo'<script type="text/javascript">
				   alert("No ingreso el precio del producto o ingreso un valor negativo");
				   window.location.href="../../panel.php";
				</script>';
			}
		}else{
			echo'<script type="text/javascript">
			   alert("No ingresó algun nombre");
			   window.location.href="../../panel.php";
			</script>';
		}
} 
?>