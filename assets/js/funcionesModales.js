	// Funcion para pasarle los datos al modal y se puedan editar.
	$('.modificar').on('click', function() {
		var select = document.getElementById('act_categ');
		$tr = $(this).closest('tr');/*Obtenemos los datos que contiene el campo padre a la clase "modificar"*/
		var datos = $tr.children("td").map( function() { /*Convertimos a un array de datos*/
			return $(this).text();
		})
		$numero = datos[5];
		// Insertamos cada dato al campo con el respectivo ID
   		$('#act_id').val(datos[0]);
   		$('#act_nombre').val(datos[2]);
   		$('#act_descripcion').val(datos[3]);
   		$('#act_precio').val(datos[4]);
   		$('#act_ventas').val(datos[5]);
   		document.getElementById('act_ventas').setAttribute("min", $numero);
   		$('#act_categ').val(datos[6]);
   		if (datos[6] == 'Fechas especiales') {
   			document.getElementById('act_Lbl').style.display = 'block';
   			document.getElementById('act_subcateg').style.display = 'block';
   			$('#act_subcateg').val(datos[7]);
   		}else{
   			document.getElementById('act_subcateg').style.display = 'none';
   			document.getElementById('act_Lbl').style.display = 'none';
   		}
	})
	// Funcion para mostrar u ocultar el select de "subcategoria"
	// Las dos siguientes funciones se mandan a llamar en el atributo onchange del respectivo Select
	function mostrarSubcategoria(){
		var selectAct = document.getElementById('act_categ');
		if (selectAct.options[selectAct.selectedIndex].text == 'Fechas especiales') {
			document.getElementById('act_Lbl').style.display = 'block';
	   		document.getElementById('act_subcateg').style.display = 'block';
		}else{
			document.getElementById('act_Lbl').style.display = 'none';
	   		document.getElementById('act_subcateg').style.display = 'none';
		}
	}
	function mostrarSubcategoriaNuevos(){
		var selectNue = document.getElementById('nuevoCat');
		if (selectNue.options[selectNue.selectedIndex].text == 'Fechas especiales') {
			document.getElementById('lblnuevosubCat').style.display = 'block';
	   		document.getElementById('nuevoSubCat').style.display = 'block';
		}else{
			document.getElementById('lblnuevosubCat').style.display = 'none';
	   		document.getElementById('nuevoSubCat').style.display = 'none';
		}
	}

	// Funcion para pasarle el id y nombre al modal y el usuario confirme la eliminacion.
	$('.borrar').on('click', function() {
		$tr = $(this).closest('tr');/*Obtenemos los datos que contiene el campo padre a la clase "eliminar"*/
		var datos = $tr.children("td").map( function() { /*Convertimos a un array de datos*/
			return $(this).text();
		})
		// Insertamos cada dato al campo con el respectivo ID
		$('#elim_id').val(datos[0]);
   		$('#elim_nombre').val(datos[2]);
	})

	// Funcion para obtener la imagen cargada y la inserte en el espacio de previsualizacion.
	document.getElementById("foto").onchange = function(e) {
	  // Creamos el objeto de la clase FileReader
	  let reader = new FileReader();

	  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
	  reader.readAsDataURL(e.target.files[0]);

	  // Le decimos que cuando este listo ejecute el código interno
	  reader.onload = function(){
	    let preview = document.getElementById('preview'),
	    image = document.createElement('img');

	    image.src = reader.result;

	    preview.innerHTML = '';
	    preview.append(image);
	  };
	}


