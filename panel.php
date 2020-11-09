<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
	<link rel="stylesheet" href="assets/css/estilosPanel.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
</head>
<body>

<div class="wrapper"><!-- Contenedor principal -->
    <div class="sidebar"><!-- Menu izquierdo -->
        <h2>Pinceladas</h2>
        <ul>
            <li><a href="#inicio" onclick="abrirInicio()"><i class="fas fa-home fa-1x" ></i>Inicio</a></li>
            <li><a href="#nuevos" onclick="abrirNuevos()"><i class="far fa-edit fa-1x"></i>Nuevo Producto</a></li>
            <li><a href="#todos" onclick="abrirTodos()"><i class="far fa-check-square fa-1x"></i>Todos los productos</a></li>
        </ul> 
    </div>
    <div class="main_content"><!-- Contendor paa contenido derecho -->
    	<h1 class="header">Panel de Administracion</h1>
    	<section id="inicio"><!-- Seccion de bienvenida al panel -->
    		<div class="info">
    			<h2>¡Bienvenido!</h2>
    			<p>En este panel podrás administrar tus productos.</p>
    			<i class="fas fa-smile-beam fa-9x"></i>
    		</div>
    	</section>  
    	


    	<section id="nuevos"><!-- Seccion para registrar nuevos productos -->
    		<div class="info">
    			<h2>Productos Nuevos</h2>
    			<p>En ésta sección podrás registrar nuevos productos.</p>
    		</div>
    			<div class="formulario">
    				<form action="assets/php/subirNuevoProd.php" enctype="multipart/form-data" method="post">
    					<label for="nombre">Nombre del producto</label><br>
    					<input type="text" name="nombre"><br>
    					<label for="precio">Precio del producto</label><br>
    					<input type="number" name="precio" step="any" min="0"><br>
    					<label for="categoria">Categoria del producto</label><br>
    					<select name="categoria" id="nuevoCat" onchange="mostrarSubcategoriaNuevos();">
    						<?php 	include ("assets/php/obteniendoEnumCateg.php");
    						foreach ($enumCateg as $key => $opciones): ?>
    							<option><?php echo $opciones ?></option>
    						<?php endforeach ?>	
    					</select><br>
                        <label for="subcategoria" id="lblnuevosubCat">Subcategoria del producto</label><br>
                        <select name="subcategoria" id="nuevoSubCat">
                            <?php   include ("assets/php/obteniendoEnumSubcateg.php");
                            foreach ($enumSub as $key => $opciones): ?>
                                <option><?php echo $opciones ?></option>
                            <?php endforeach ?> 
                        </select><br>
    					<label for="decripcion">Descripcion del producto</label><br>
    					<textarea name="descripcion" maxlength="100" placeholder="Máximo 100 caracteres."></textarea><br>
    					<label for="foto" class="labelFoto">Seleccione la fotografía</label><br>
    					<input type="file" name="foto" id="foto"><br>
    					<input type="submit" value="Subir Producto">
    				</form>
    				<div class="contPrev">
    					<label >Previsualizacion</label>
    					<div id="preview">
    					</div>
    				</div>
    			</div>
    	</section>

    	
    	
    	<section id="todos"><!-- Seccion para visualizar todos los productos -->
    		<div class="info">
    			<h2>Todos los Productos</h2>
    			<p>En ésta sección podrás consultar, actualizar y eliminar los productos que ya estan registrados.</p>
    			</div>
    			<div class="tabla">
    				<?php include("assets/php/obtencionImgTabla.php"); ?> 
    				<table id="datatable" class="cell-border compact hover order-column stripe">
    					<thead>
    						<tr>
    							<th>Id</th>
    							<th>Fotografía</th>
    							<th>Nombre</th>
    							<th>Descripción</th>
    							<th>Precio</th>
                                <th>Ventas</th>
    							<th>Categoría</th>
                                <th>Subcategoría</th>
    							<th>Editar</th>
    							<th>Eliminar</th>
    						</tr>
    					</thead>
    					<tbody>
    							<?php foreach ($consulta as $key => $producto): ?> 
    								<tr class="fila">
    									<td><?php echo $producto['id'] ?></td>
    									<td><img src="<?php echo $producto['ruta'] ?>" alt=""></td>
    									<td><?php echo $producto['nombre'] ?></td>
    									<td><?php echo $producto['descripcion'] ?></td>
    									<td><?php echo $producto['precio'] ?></td>
                                        <td><?php echo $producto['ventas'] ?></td>
    									<td><?php echo $producto['categoria'] ?></td>
                                        <td><?php echo $producto['subcategoria'] ?></td>
    									<td><button class="modificar" onclick="modalEdit()"><i class="fas fa-pencil-alt fa-2x"></i></button></td>
    									<td><button class="borrar" onclick="modalElim()"><i class="fas fa-eraser fa-2x"></i></button></td>
    								</tr>	
    							<?php endforeach?>
    					</tbody>
    				</table>
    			</div>
    	</section>


    	<section class="editar">
    		<div class="contenedorModalEdit">
    			<div class="formulario">
    				<form action="assets/php/actualizarProd.php" method="post">
    					<h2>Actualizar producto</h2>
    					<label for="id">Id del producto</label><br>
    					<input type="text" id="act_id" readonly="true" name="id"><br>
    					<label for="nombre" >Nombre del producto</label><br>
    					<input type="text" id="act_nombre" readonly="true" name="nombre"><br>
    					<label for="precio">Precio del producto</label><br>
    					<input type="number" id="act_precio" name="precio" step="any" min="0"><br>
                        <label for="ventas">Ventas del producto</label><br>
                        <input type="number" id="act_ventas" name="ventas" min="0"><br>
    					<label for="categoria">Categoria</label><br>
    					<select name="categoria" id="act_categ" onchange="mostrarSubcategoria();">
                            <?php   include ("assets/php/obteniendoEnumCateg.php");
                            foreach ($enumCateg as $key => $opciones): ?>
                                <option><?php echo $opciones ?></option>
                            <?php endforeach ?> 
                        </select><br>
                        <label for="subcategoria" id="act_Lbl">Subcategoria del producto</label><br>
                        <select name="subcategoria" id="act_subcateg">
                            <?php   include ("assets/php/obteniendoEnumSubcateg.php");
                            foreach ($enumSub as $key => $opciones): ?>
                                <option><?php echo $opciones ?></option>
                            <?php endforeach ?> 
                        </select><br>
    					<label for="descripcion">Descripcion</label><br>
    					<textarea id="act_descripcion" name="descripcion" maxlength="100" placeholder="Máximo 100 caracteres." class="campo"></textarea><br>
    					<div class="botones">
    						<input type="submit" value="Actualizar">
    						<input type="reset" onclick="cerrarEdit()" value="Cancelar"></button>
    					</div>
    				</form>    				
    			</div>
    		</div>
    	</section>

    	<section class="eliminar">
    		<div class="contenedorModalElim">
    			<form action="assets/php/eliminarProd.php" method="post">
    				<p>Seguro que desea ELIMINAR:</p>
    				<label for="id">Id: </label>
    				<input type="text" id="elim_id" readonly="true" name="id" class="campo"><br>
    				<label for="nombre">Nombre: </label>
    				<input type="text" id="elim_nombre" readonly="true" name="nombre" class="campo"><br>
    				<div class="botones">
    					<input type="submit" value="Eliminar">
    					<input type="reset" value="Cancelar" onclick="cerrarElim()">
    				</div>
    			</form>
    		</div>
    	</section>
    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/efectoPanel.js"></script>
<script type="text/javascript" src="assets/js/funcionesModales.js"></script>
<!-- Script de Datatable -->
<script>
	$(document).ready( function () {
       $('#datatable').DataTable({
            language: {
                search: "Buscar:",
                emptyTable: "No se encontraron productos",
                paginate: {
                        first:      "Inicio",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Ultimo"
                    },
                info: "Mostrando _END_ de _TOTAL_ elementos",
                lengthMenu: "Se muestran _MENU_ productos por página",
                zeroRecords: "No se encontraron conincidencias :("
            }
        });
    });
</script>
</body>
</html>