<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){ //Validacion que se reciban datos y que se tenga un archivo.
	$check = @getimagesize($_FILES['foto']['tmp_name']); //Validacion de que el archivo sea una imagen
	// include ("obteniendoenum.php");
	$categoria = $_POST['categoria'];
	$nombre = $_POST['nombre']; 
	$precio = $_POST['precio'];
	$subcategoria = $_POST['subcategoria'];
	$descripcion = $_POST['descripcion'];
	//Funcion para registro con subcategoria.


	if ($check !== false){
		if (!empty($nombre)){
			if (!empty($precio)){
				if (!empty($descripcion)) { 

					//Guardando la imagen.
					$archivo_subido = '../img/' . $nombre.'.jpg';//Concatenacion de la ruta en la que se guardara la fotografia del producto (Se coloca el mismo nombre que el usuario ingresa en el formulario en el campo "Nombre").
					$registro_rutaImgBd = 'assets/img/'. $nombre .'.jpg'; //Concatenacion de la ruta de la foto para registrarse en la base de datos (Se coloca el mismo nombre que el usuario ingresa en el formulario en el campo "Nombre").
					move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido); //Movimiento de la imagen de los archivos temporales a la carpeta destino.

					
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
						mysqli_query($conexion, "INSERT INTO productos(nombre, descripcion, precio, categoria, subcategoria, ruta) VALUES ('$nombre', '$descripcion', '$precio', '$categoria', '$subcategoria' ,'$registro_rutaImgBd')");//Registro de las variables en la base de datos.
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
						mysqli_query($conexion, "INSERT INTO productos(nombre, descripcion, precio, categoria, subcategoria, ruta) VALUES ('$nombre', '$descripcion', '$precio', '$categoria', NULL ,'$registro_rutaImgBd')");//Registro de las variables en la base de datos.
					}


					echo'<script type="text/javascript">
					   alert("Producto cargado correctamente.");
					   window.location.href="../../panel.php"; //Para regresar al origen
					</script>';
					return header("Location:../../panel.php"); 
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
			   alert("No ingresó un nombre");
			   window.location.href="../../panel.php";
			</script>';
		}
	} else{
		echo'<script type="text/javascript">
    		alert("No cargó una imagen");
    		window.location.href="../../panel.php";
    	</script>';
	}	
}
?>
	