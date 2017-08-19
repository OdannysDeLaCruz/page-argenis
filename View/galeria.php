<?php 
include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galería</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
	<meta name="description" content="Galeria de imagenes y fotos de eventos y viajes de Argenis Contreras, artista vallenato en la ciudad de Bogotá">
	<meta name="keywords" content="Galeria de imagenes, fotografias de vajes, fotos vallenatas, fotos de Argenis Contreras, imagenes de Argenis Contreras, fotos de viajes de Argenis Contreras, fotos instrumentos Argenis Contreras vallenato">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/galeria.css">
	<script	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

<header>
<?php $misImagenes = $objeto->seleccionarImagen('imagenes_cargadas',1);
foreach ($misImagenes as $imagen) { ?>

<img class="fondo-header" src="img/<?php echo $imagen['nombre_imagen'];?>">

<?php } ?>
	<section class="row titulo">
		<section class="titulo-subtitulo">

		<?php $misDatos = $objeto->seleccionar('contenido','id_c',1);
				foreach ($misDatos as $datos) { ?>

			<h1 class="fuente-oleo-script"><?php echo $datos['titulo']; ?></h1>
			<h4 class="fuente-playfair"><?php echo $datos['subtitulo']; ?></h4>

		<?php } ?>

		</section>
		
	</section>
</header>

<!-- IMAGENES DE LA GALERIA -->

<section class="principal-galeria">
<nav>
	<input type="checkbox" class="checkbox-btn-menu" id="btn-menu">
	<label for="btn-menu" class="glyphicon glyphicon-align-right"><span class="text-menu">Menú</span></label>

	<ul class="ul-menu">
		<li class="navegacion">
			<a href="../index.php">Inicio</a>
		</li>
		<li class="navegacion">
			<a href="../index.php#cinco-musicos">5 musicos</a>
		</li>
		<li class="navegacion">
			<a href="../index.php#grupo-completo">Grupo completo</a>
		</li>
		<li class="navegacion">
			<a href="../index.php#guitarra">Guitarra</a>
		</li>
		<li class="navegacion">
			<a href="../index.php#temas">Temas</a>
		</li>
		<li class="navegacion">
			<a href="../index.php#contacto">Contacto</a>
		</li>
		<li class="navegacion">
			<a href="View/galeria.php">Galería</a>
		</li>
	</ul>		
</nav>

	<div class="texto-click">
		<h3>Galería</h3>
		<p>Dar Click para ampliar imagen</p>
	</div>
	<ul class="galeria">
	
		<?php $imagenes = $objeto->seleccionarImagen('galeria',null);		
			foreach ($imagenes as $imagen) { ?>
	
		<li class="galeria__item">
		    <img src="img/galeria/<?php echo $imagen['imagen']; ?>" class="galeria__img">
		</li>
	
	    <?php } ?> 
	
	</ul>
</section>
	

<footer class="row">
	<section class="col-xs-12 col-sm-6 col-md-6"><h4>Argenis Contreras | Derechos reserados 2016</h4></section>
	<section class="col-xs-12 col-sm-6 col-md-6"><h4>Diseño y Desarrollo por Odannys De La Cruz</h4></section>

</footer>

<?php include_once ("boton_subir.php"); ?>
<!-- Fin contenido principal -->
<!-- Enlaces a Librerias JS -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/galeria.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/boton_subir.js"></script>
	
</body>
</html>
