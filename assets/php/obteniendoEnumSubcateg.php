<?php 
	include ("conexion.php");

	$consulta = mysqlI_query($conexion, "SELECT COLUMN_TYPE FROM information_schema.COLUMNS WHERE table_schema = 'pinceladas' AND TABLE_NAME = 'productos' AND column_name = 'subcategoria'"); //Con esta consulta se obtienen los valores para 'enum'; Sin embargo lo devuelve en un string asi:

	//enum('opcion1', 'opcion2')

	$row = mysqli_fetch_array($consulta);//convertimos el string a un array de un solo indice "0", ya que es solo una linea de string.

	$elimCaracteres = $row[0]; //Se asignan los valores del array en cero a la variable $cadenavalor apra ser procesada (hasta este punto sigue siendo un string almacenado en el indice cero):

	//array([0]=>"'valor1','valor2','valor3'")

	//Quitamos los caracteres que sobran
	$elimCaracteres = preg_replace("'enum'", "", $elimCaracteres);//primero la palabra enum.
	$elimCaracteres = preg_replace("'\('", "", $elimCaracteres);//Despues el parentesis abriendo (con su valor de escape).
	$elimCaracteres = preg_replace("'\)'", "", $elimCaracteres);//Despues el parentesis cerrando (con su valor de escape).
	$elimCaracteres = preg_replace("/'/", "", $elimCaracteres);////Por ultimo las comillas simples (con su valor de escape).
	$enumSub = preg_split("','", $elimCaracteres); // Esto es para que se separe el string que resulto y que esta almacenado en $cadenavaloren base a las comas.

 ?>