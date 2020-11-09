<?php 
function fotoCategoria($categ){
	include ("conexion.php");
	include ("obteniendoEnumCateg.php");

	for ($i=0; $i < count($enumCateg) ; $i++) { 
		if ($enumCateg[$i]==$categ) {
			$categ = $i+1;
			break;
		}
	}
	return mysqli_query($conexion, "SELECT * FROM productos WHERE categoria = $categ");
}

function fotosubCategoria($categ, $subcateg){
	include ("conexion.php");
	include ("obteniendoEnumCateg.php");
	include ("obteniendoEnumSubcateg.php");

	for ($i=0; $i < count($enumCateg) ; $i++) { 
		if ($enumCateg[$i]==$categ) {
			$categ = $i+1;
			break;
		}
	}

	for ($j=0; $j < count($enumSub) ; $j++) { 
		if ($enumSub[$j]==$subcateg) {
			$subcateg = $j+1;
			break;
		}
	}

	return mysqli_query($conexion, "SELECT * FROM productos WHERE categoria = $categ AND subcategoria = $subcateg");
}
?>
