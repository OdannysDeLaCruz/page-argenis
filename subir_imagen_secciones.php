<?php 
include_once('Model/procesarDatosModel.php');
$Objeto = new procesarDatos();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar pagina Argenis Contreras</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="View/css/bootstrap.min.css" />
	<link rel="stylesheet" href="View/css/estilos_editar_pagina.css">

	<script>
		
	</script>
</head>
<body>
<section class="bloque_administracion">
	
	<figure class="img-admin">
		<img src="View/img/fondo-header-2.jpg" alt="Img-Admin">
	</figure>
	<section class="menu">
		<h5>Admin</h5> <span class="glyphicon glyphicon-chevron-down"></span>
	</section>
</section>
<!-- SECCION PANEL-CONTROL -->
<section class="row panel-control">
			
	<nav class="menu-panel-control">

		<ul>
			<a href="editar_pagina.php"><li><span class="glyphicon glyphicon-home"></span> Principal</li></a>
			<a href="editar-galeria.php"><li><span class="glyphicon glyphicon-picture"></span> Galerìa</li></a>
			<a href="subir_imagen_secciones.php"><li><span class="glyphicon glyphicon-picture"></span> Imagenes de fondos</li></a>
		</ul>
	</nav>

</section>

<section class="row contenido_principal">

	<section class="col-md-10 panel-edicion">

		<section class="opciones">

			<section class="items_opciones">
				<input type="hidden" value="1">
				<p class="items">Principal</p>
				<a class="items" href="subir.php?id=1"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
			<section class="items_opciones">
				<input type="hidden" value="2">
				<p class="items">Cinco Musicos</p>
				<a class="items" href="subir.php?id=2"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
			<section class="items_opciones">
				<input type="hidden" value="3">
				<p class="items">Grupo Completo</p>
				<a class="items" href="subir.php?id=3"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
			<section class="items_opciones">
				<input type="hidden" value="4">
				<p class="items">Vallenato Con Guitarra</p>
				<a class="items" href="subir.php?id=4"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
			<section class="items_opciones">
				<input type="hidden" value="5">
				<p class="items">Mas Temas</p>
				<a class="items" href="subir.php?id=5"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
<?php 
$titulos = $Objeto->seleccionar('contacto','id',3);
		foreach ($titulos as $titulo) { ?>

			<section class="items_opciones">
				<input type="hidden" value="6">
				<p class="items"><?php echo $titulo['nomb_usu']; ?></p>
				<a class="items" href="subir.php?id=6"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
		<?php } ?>
<?php 
$titulos = $Objeto->seleccionar('contacto','id',4);
		foreach ($titulos as $titulo) { ?>

			<section class="items_opciones">
				<input type="hidden" value="7">
				<p class="items"><?php echo $titulo['nomb_usu']; ?></p>
				<a class="items" href="subir.php?id=7"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
		<?php } ?>
<?php 
$titulos = $Objeto->seleccionar('contacto','id',5);
		foreach ($titulos as $titulo) { ?>

			<section class="items_opciones">
				<input type="hidden" value="8">
				<p class="items"><?php echo $titulo['nomb_usu']; ?></p>
				<a class="items" href="subir.php?id=8"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
		<?php } ?>
<?php 
$titulos = $Objeto->seleccionar('contacto','id',6);
		foreach ($titulos as $titulo) { ?>

			<section class="items_opciones">
				<input type="hidden" value="9">
				<p class="items"><?php echo $titulo['nomb_usu']; ?></p>
				<a class="items" href="subir.php?id=9"><img src="View/img/logo_cambiar.png" width="50" alt=""></a>
			</section>
		<?php } ?>
		</section>

	</section>

	<footer>

		<section class="col-xs-12 col-md-10"><h4>Argenis Contreras | Derechos reserados 2016</h4></section>
		<section class="col-xs-12 col-md-10"><h4>Diseño y Desarrollo por Odannys De La Cruz</h4></section>

	</footer>

	
</section>
	

</body>
</html>
