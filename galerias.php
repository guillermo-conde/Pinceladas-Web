<!DOCTYPE html>
<html lang="es">
<body>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		<link href="../assets/recursos/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../assets/css/estilosGaleria.css">
		<title>Productos</title>
	</head>
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
						<li class="itemPrinc efecto1"><a href="index.php" >Inicio</a></li>
						<li class="itemPrinc efecto2"><a href="" >Otras Categorias</a>
							<ul class="categorias">
								<li class="itemSecun"><a href="../galerias.php/?categ=Alcancias">Alcancías</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Alhajeros">Alhajeros</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Cocina">Cocina</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Hogar">Hogar</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Floreros">Floreros</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Maceteros">Maceteros</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Recuerdos">Recuerdos</a></li>
								<li class="itemSecun"><a href="../galerias.php/?categ=Tlaxcala">Tlaxcala</a></li>
								<li class="itemSecun"><a href="#">Fechas especiales</a>
									<ul class="fEspeciales">
										<li class="itemTerc"><a href="../galerias.php/?categ=Fechas especiales&subcateg=Dia de muertos">Día de muertos</a></li>
										<li class="itemTerc"><a href="../galerias.php/?categ=Fechas especiales&subcateg=Fiestas Patrias">Fiestas patrias</a></li>
										<li class="itemTerc"><a href="../galerias.php/?categ=Fechas especiales&subcateg=Navidad">Navidad</a></li>
										<li class="itemTerc"><a href="../galerias.php/?categ=Fechas especiales&subcateg=San Valentin">San Valentin</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</header>
	<section>
		<div>
			<?php 
				include('assets/php/obtencionImg.php');
				$categoria = $_GET['categ'];
				if ($categoria == 'Fechas especiales') {
					$subcategoria = $_GET['subcateg'];
					$consulta = fotoSubCategoria($categoria, $subcategoria);
					echo "<h2 class='tipo'>  $subcategoria </h2>";
				}else {
					$consulta = fotoCategoria($categoria);
					echo "<h2 class='tipo'>  $categoria </h2>";
				}
			?>
		</div>
		<div class="galeria">
			<?php foreach ($consulta as $key => $foto) :?>
				 <img class="imgGaleria" src="<?php echo '../' . $foto['ruta']?>" alt="<?php echo $foto['nombre']?>" name="<?php echo $foto['descripcion']?>" id="<?php echo 'Precio: $'.$foto['precio'].' MXN';?>"></img>	
			<?php endforeach ?>
		</div>

		<div class="lightbox">
			<div class="contImg">
				<img class="imgLightbox" src="" alt="">
				<div class="info">
					<p class="titFoto"><b></b></p>
					<p class="descFoto"></p>
					<p class="precFoto"><b></b></p>
				</div>
			</div>
		</div>
	</section>
	<a href=""><i class="fab fa-facebook-messenger fa-3x"></i></a>
	<a href="https://wa.me/5212461375471?text=Me%20interesa%20in%20el%20auto%20que%20vendes" target="_blank"><i class="fab fa-whatsapp fa-3x"></i></a>
	
	<script>
		const imagen = document.querySelectorAll('.imgGaleria');
		const lightbox = document.querySelector('.lightbox');
		const imgLi = document.querySelector('.imgLightbox');
		const contImgLi = document.querySelector('.contImg');
		const titFoto = document.querySelector('.titFoto');
		const descFoto = document.querySelector('.descFoto');
		const precFoto = document.querySelector('.precFoto');


		imagen.forEach(image => {
			image.addEventListener('click', ()=>{
				captarImg(image.getAttribute('src'), image.getAttribute('alt'), image.getAttribute('name'), image.getAttribute('id'));
			})
		})

		const captarImg = (srcImg, nombImg, descImg, precImg)=>{
			lightbox.style.transform = 'scale(1)';
			contImgLi.style.transform = 'scale(1)';
			imgLi.src = srcImg;
			titFoto.innerHTML = nombImg;
			descFoto.innerHTML = descImg;
			precFoto.innerHTML = precImg;

		}
		lightbox.addEventListener('click', ()=>{
			lightbox.style.transform = 'scale(0)';
			contImgLi.style.transform = 'scale(0)';
		})
	</script>
</body>
</html>