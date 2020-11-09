<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
</head>
<body>
	<?php 
		include('assets/php/obtencionImg.php');
		$categoria = $_GET['categ'];
		if ($categoria == 'Fechas especiales') {
			$subcategoria = $_GET['subcateg'];
			$consulta = fotoSubCategoria($categoria, $subcategoria);
		}else {
			$consulta = fotoCategoria($categoria);
		}
	?>
	<h2><?php echo $categoria; ?></h2>
	<?php foreach ($consulta as $key => $foto) :?>
		<p><?php echo $foto['nombre'] ?></p>	
	<?php endforeach ?>
</body>
</html>