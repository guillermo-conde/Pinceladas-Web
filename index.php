<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href="assets/recursos/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="assets/css/estilos.css">
	<title>Pinceladas Ceramica</title>
</head>
<body onload="menu()">
	<header>
		<section class="inicio">
			<div class="tituloPagina">
				<h1>
					Pinceladas Cerámica
				</h1>
			</div>
			<div class="menuPrincipal">
				<nav>
					<ul>
						<li class="itemPrinc efecto1"><a href="#Nosotros" >Sobre nosotros</a></li>
						<li class="itemPrinc efecto2"><a href="" >Nuestros Productos</a>
							<ul class="categorias">
								<li class="itemSecun"><a href="galerias.php/?categ=Alcancias">Alcancías</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Alhajeros">Alhajeros</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Cocina">Cocina</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Hogar">Hogar</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Floreros">Floreros</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Maceteros">Maceteros</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Recuerdos">Recuerdos</a></li>
								<li class="itemSecun"><a href="galerias.php/?categ=Tlaxcala">Tlaxcala</a></li>
								<li class="itemSecun"><a href="#">Fechas especiales</a>
									<ul class="fEspeciales">
										<li class="itemTerc"><a href="galerias.php/?categ=Fechas especiales&subcateg=Dia de muertos">Día de muertos</a></li>
										<li class="itemTerc"><a href="galerias.php/?categ=Fechas especiales&subcateg=Fiestas Patrias">Fiestas patrias</a></li>
										<li class="itemTerc"><a href="galerias.php/?categ=Fechas especiales&subcateg=Navidad">Navidad</a></li>
										<li class="itemTerc"><a href="galerias.php/?categ=Fechas especiales&subcateg=San Valentin">San Valentin</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="itemPrinc efecto3"><a href="#Contacto">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<img src="assets/recursos/logo2.jpg"  class="portada" alt="">
	</header>

	<section>
		<div class="bienvenida" id="Nosotros">
			<h2>Bienvenido a Pinceladas</h2>
			<div class="mision">
				<h3 class="subtitulo">Mision</h3>
				<p>Pinceladas busca ofrecer productos de calidad y con precios accesibles, con una amplia gama de piezas de cerámica 
				dando color y armonía a tu casa con decoraciones únicas y hermosas, ademas de piezas funcionales y duraderas</p>
			</div>
			<div class="vision">
				<h3 class="subtitulo">Vision</h3>
				<p>Nuestra vision consiste en ser una empresa responsable, comprometida con nuestros clientes y trabajadores para mejorar
				continuamente</p>
			</div>
		</div>
		<div class="masVendido">
			<h2>Lo mas vendido</h2>
			<?php include("assets/php/masVendidos.php"); ?> 
			<?php foreach ($consulta as $key => $producto): ?> 
				<img src="<?php echo $producto['ruta'] ?>" alt="<?php echo $producto['nombre'] ?>">
			<?php endforeach?>
		</div>
		<div class="conocenos" id="Contacto">
			<div>
				<h2 class="subtitulo">Contacto</h2>
				<div class="contacto">
					<p><b>Teléfono: </b>221 146 51 57</p>
					<p><b>Mail: </b>americapais135@gmail.com</p>
					<p><b>Horario de atencion: </b>9:00am - 6:00pm</p>
					<p><b>Visítanos en nuestras redes sociales:</b></p>
					<div class="redesSociales">
						<a href="https://www.facebook.com/CPinceladas" target="_blank" title="Ir a nuestra página de Facebook."><i class="fab fa-facebook-square fa-4x"></i></a>
                        <a href="https://www.instagram.com/ceramica_pinceladas/" target="_blank" title="Ir a nuestra página de Instagram."><i class="fab fa-instagram-square fa-4x"></i></a>
					</div>
				</div>
				<div class="ubicacion">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d619.5885714149697!2d-98.24378965953261!3d19.223693639373995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDEzJzIzLjciTiA5OMKwMTQnMzYuNyJX!5e0!3m2!1ses!2smx!4v1603685558934!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:solid 20% gray;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
		<div class="puntosEntrega">
			<h2 class="subtitulo">Entregamos en:</h2>
			<div class="info">
				<p>Entregamos nuestros productos en los siguientes puntos en el <b>Horario de 9:00 am a 5:00 pm.</b></p>
			</div>
			<div>
			<div class="contenedorPEnt">
				<div class="ubicacionPuntoEnt">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.5265552220576!2d-98.2409034013782!3d19.2158703536033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfdb41cda57b49%3A0xc744c00cf7eb2a35!2sParque%20de%20Zacatelco!5e0!3m2!1ses-419!2smx!4v1604378021288!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="ubicacionPuntoEnt">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.145182488094!2d-98.24357588526632!3d19.319505386948727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd93da401052b%3A0xd182e78ad76eedd0!2sCasa%20de%20las%20Artesan%C3%ADas%20de%20Tlaxcala!5e0!3m2!1ses-419!2smx!4v1604378062270!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<a href=""><i class="fab fa-facebook-messenger fa-3x"></i></a>
	<a href="https://wa.me/5212461375471?text=Me%20interesa%20in%20el%20auto%20que%20vendes" target="_blank"><i class="fab fa-whatsapp fa-3x"></i></a>
	<footer>
		<div class="copyright"><p><b>Pinceladas Cerámica.</b> Todos los derechos reservados.</p></div>
		<div class="avisoPriv"><p>Consulta <a href="">aquí</a> nuestro aviso de privacidad.</p></div>
	</footer>
<script type="text/javascript" src="assets/js/efectoMenu.js"></script>
</body>
  
</html>