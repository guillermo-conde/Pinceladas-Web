<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Pinceladas</h2>
        <ul>
            <li><a href="#inicio"></i>Inicio</a></li>
            <li><a href="#nuevos"></i>Productos Nuevos</a></li>
            <li><a href="#todos"></i>Todos los productos</a></li>
        </ul> 
    </div>
    <div class="main_content">
		<div class="header">Panel de Administracion</div>
		<section id="inicio"></section>  
        <div class="info">
          <div>Bienvenido!</div>
      </div>
      <div class="info">
		<div>En el panel de Administración podras modificar tus productos</div>
    </div>
		<section id="nuevos"></section>
        <div class="info">
          <div>Productos Nuevos</div>
      </div>
      <div class="info">
		<div>En el panel de Administración podras modificar tus productos</div>
    </div>
		<div class="tabla">
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Ruta</th>
					<th>Precio</th>
					<th>Max de Ventas</th>
				</tr>
			</table>
		</div>
		<section id="todos"></section>
		<div class="info">
          <div>Todos los Productos</div>
      </div>
      <div class="info">
		<div>En el panel de Administración podras modificar tus productos</div>
    </div>
		<div class="tabla">
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Ruta</th>
					<th>Precio</th>
					<th>Max de Ventas</th>
				</tr>
			</table>
		</div>
	</div>
	<script src="formulario.js"></script>
	</div>

</div>
</body>
</html>