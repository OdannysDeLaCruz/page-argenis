<?php 
include_once('Model/procesarDatosModel.php');
$Objeto = new procesarDatos();
 ?>

<!DOCTYPE html>
<html lang="Es">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Argenis,Rafael, Contreras, parrandas, serenatas musical, vallenato, musicos, grupos musiales, guitarra, guitarrista">
	<title>Argenis Contreras</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="View/css/bootstrap.min.css" />
	<link rel="stylesheet" href="View/css/mis-estilos.css"/>
</head>
<body>
<header id="inicio">
<!-- IMAGEN DE FONDO DEL HEADER  -->
<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',1);
foreach ($misImagenes as $imagen) { ?>

<img class="fondo-header" src="View/img/<?php echo $imagen['nombre_imagen'];?>">

<?php } ?>
<!-- Numeros de telefonos de contacto -->


	<section class="capa-oscura"></section>
	<section class="row contacto text-right">
		<img alt="Whatsapp" src="View/img/logo-whatsapp.png" />
		<p class="fuente-playfair">


		Bogota, Dc (+57) 

<?php $misDatos = $Objeto->seleccionar('contacto','id',1); 
		foreach ($misDatos as $datos){ 
		echo $datos['tel']; 
 } ?>

		- 

<?php $misDatos = $Objeto->seleccionar('contacto','id',2); 
		foreach ($misDatos as $datos){ 
		echo $datos['tel']; 
 } ?>

		<!-- Bogota, Dc (+57) 300 616 5561 - 320 230 26 50 -->

		</p>
	</section>


	<!-- Boton flotante subir (^) en la pagina -->

	<?php
	    include_once ("View/menu-principal.php");
	    include_once ("View/boton_subir.php");
     ?>
	
<!-- TITULO, SUBTITULO Y MENSAJES DEL HEADER -->
<?php $misDatos = $Objeto->seleccionar('contenido','id_c',1);
foreach ($misDatos as $datos) { ?>
	<section class="row titulo text-right">

		<section class="col-md-12 col-lg-12 titulo-subtitulo">
			<h1 class="fuente-oleo-script text-center"><?php echo $datos['titulo'] ?></h1>

			<h4 class="fuente-playfair text-center"><?php echo $datos['subtitulo'] ?></h4>

			<hr class="separador1" />
		</section>
	</section>

	<section class="row descripcion">
		<div class="col-md-2"></div>
		<section class="col-xs-12 col-sm-12 col-md-8">
			<p class="texto-descripcion fuente-playfair">
				<?php echo $datos['mensaje'] ?>
			</p>
		</section>
		<div class="col-md-2"></div>
	</section>
<?php } ?>

<section class="row contenedor-videos-bienvenida">
	<section class="videos-bienvenidas">

<!-- VIDEOS DEL HEADER -->
<!-- <?php //$misVideos = $Objeto->seleccionarVideos(1); ?>

	<?php //foreach ($misVideos as $videos) { ?>

		<section class="col-md-6 col-sm-6 col-xs-12 text-center">

			<?php //echo $videos['url'] ?>

			<h3 class="fuente-playfair"><?php //echo $videos['titulo'] ?></h3>
		</section>
	<?php //} ?>

<?php //$misVideos = $Objeto->seleccionarVideos(2); ?>
	
	<?php //foreach ($misVideos as $videos) { ?>

		<section class="col-md-6 col-sm-6 col-xs-12 text-center">

			<?php //echo $videos['url'] ?>

			<h3 class="fuente-playfair"><?php //echo $videos['titulo'] ?></h3>
		</section>

	<?php //} ?>

	</section> -->
</section>

</header>
<!-- FIN HEADER -->
<!-- INICIO DE CONTENIDO PRINCIPAL -->
<section class="contenido-principal" id="principal">

	<!-- seccion presentacion de formatos -->
	<section class="row presentacion-formatos">
		<section class="col-md-12">
		<?php $misDatos = $Objeto->seleccionar('contenido','id_c',2);
			foreach ($misDatos as $datos) { ?>

			<h2 class="fuente-playfair"><?php echo $datos['titulo'] ?></h2>

			<hr class="separador2" />

			<p class="fuente-playfair"><?php echo $datos['mensaje'] ?></p>

		<?php } ?>

		</section>
	</section>
<!-- *************** 5 Musicos ****************** -->

<section class="row seccion-obciones cinco-musicos" id="cinco-musicos">


	<section class="col-md-6 col-sm-6 col-xm-12 contenedor-img-cinco-musicos">

		<section class="capa-cinco-musicos"></section>
	
		<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',2);
		foreach ($misImagenes as $imagen) { ?>

			<img class="imagenes-fondos " src="View/img/<?php echo $imagen['nombre_imagen'];?>">

		<?php } ?>

		<section class="texto-cinco-musicos">

		<?php $misDatos = $Objeto->seleccionar('contenido','id_c',3);
			foreach ($misDatos as $datos) { ?>

			<h1 class="fuente-playfair titulos"><?php echo $datos['titulo'] ?></h1>
			<h2 class="fuente-playfair subtitulos"><?php echo $datos['subtitulo'] ?></h2>

			<ul>

				<?php

				$listado = explode(":", $datos['mensaje']);
				foreach ($listado as $listado) { ?>

					<li class="fuente-playfair"><?php echo $listado; ?></li>

				<?php } ?>

			</ul>

		<?php } ?>

		</section>
	</section>

	<section class="col-md-6 col-sm-6 col-xm-12 videos-cinco-musicos">

		<div class="items-videos">
			<?php $misVideos = $Objeto->seleccionarVideos(3);
			foreach ($misVideos as $videos) { ?>
			
				<div><?php echo $videos['url']; ?></div>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>
			
			<?php } ?>
		</div>
		<div class="items-videos">
			<?php $misVideos = $Objeto->seleccionarVideos(4);
			foreach ($misVideos as $videos) { ?>
				
				<div><?php echo $videos['url']; ?></div>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

			<?php } ?>
		</div>
		<div class="items-videos">
			<?php $misVideos = $Objeto->seleccionarVideos(5);
			foreach ($misVideos as $videos) { ?>

				<div><?php echo $videos['url']; ?></div>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

			<?php } ?>
		</div>

	</section>
</section>
<!-- ************** Grupo Completo ***************** -->

<section class="row seccion-obciones grupo-completo" id="grupo-completo">

	<section class="col-md-6 col-sm-6 col-xm-12 videos-grupo-completo">

		<?php $misVideos = $Objeto->seleccionarVideos(6);
		foreach ($misVideos as $videos) { ?>

			<?php echo $videos['url']; ?>
			<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

		<?php $misVideos = $Objeto->seleccionarVideos(7);
		foreach ($misVideos as $videos) { ?>
			
			<?php echo $videos['url']; ?>
			<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

		<?php $misVideos = $Objeto->seleccionarVideos(8);
		foreach ($misVideos as $videos) { ?>

			<?php echo $videos['url']; ?>
			<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="col-md-6 col-sm-6 col-xm-12 contenedor-img-grupo-completo">
		<section class="capa-grupo-completo"></section>

		<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',3);
		foreach ($misImagenes as $imagen) { ?>

		<img class="imagenes-fondos" src="View/img/<?php echo $imagen['nombre_imagen'];?>">

		<?php } ?>

		<section class="texto-grupo-completo">

		<?php $misDatos = $Objeto->seleccionar('contenido','id_c',4);
			foreach ($misDatos as $datos) { ?>

			<h1 class="fuente-playfair titulos"><?php echo $datos['titulo'] ?></h1>

			<h2 class="fuente-playfair subtitulos"><?php echo $datos['subtitulo'] ?></h2>
			&nbsp;

			<ul>
				<?php

				$listado = explode(":", $datos['mensaje']);
				foreach ($listado as $listado) { ?>

					<li class="fuente-playfair"><?php echo $listado; ?></li>

				<?php } ?>
				
			</ul>

		<?php } ?>

		</section>
	</section>
</section>
<!-- ************ Vallenato con Guitarra *************** -->

<section class="row seccion-obciones vallenato-guitarra" id="guitarra">
	<section class="col-md-6 col-sm-6 contenedor-img-vallenato-guitarra ">
		<section class="capa-vallenato-guitarra"></section>

		<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',4);
		foreach ($misImagenes as $imagen) { ?>

		<img class="imagenes-fondos" src="View/img/<?php echo $imagen['nombre_imagen'];?>">

		<?php } ?>

		<section class="texto-vallenato-guitarra">

		<?php $misDatos = $Objeto->seleccionar('contenido','id_c',5);
			foreach ($misDatos as $datos) { ?>

			<h1 class="fuente-playfair titulos"><?php echo $datos['titulo'] ?></h1>

			<h2 class="fuente-playfair subtitulos"><?php echo $datos['subtitulo'] ?></h2>

			<ul>
				<?php

					$listado = explode(":", $datos['mensaje']);
					foreach ($listado as $listado) { ?>

						<li class="fuente-playfair"><?php echo $listado; ?></li>

					<?php } ?>
			</ul>

		<?php } ?>

		</section>
	</section>

	<section class="col-md-6 col-sm-6 col-xm-12 videos-vallenato-guitarra">
	
	<?php $misVideos = $Objeto->seleccionarVideos(9);
	foreach ($misVideos as $videos) { ?>

		<?php echo $videos['url']; ?>
		<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

	<?php } ?>

	<?php $misVideos = $Objeto->seleccionarVideos(10);
	foreach ($misVideos as $videos) { ?>
		
		<?php echo $videos['url']; ?>
		<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

	<?php } ?>

	<?php $misVideos = $Objeto->seleccionarVideos(11);
	foreach ($misVideos as $videos) { ?>

		<?php echo $videos['url']; ?>
		<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

	<?php } ?>

	</section>
	</section>
<!-- ************ Seccion mas videos ************ -->

<section class="row" id="temas">
	<section class="mas-videos">

	<?php $misDatos = $Objeto->seleccionar('contenido','id_c',6);
			foreach ($misDatos as $datos) { ?>

		<h2><?php echo $datos['titulo']; ?></h2>

		<section class="capa-mas-videos"></section>
	<?php } ?>
	</section>
</section>
<!-- *********************************************** -->

<section class="contenedor-videos">

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(12);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(13);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(14);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(15);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(16);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

	<section class="items-videos-temas">

		<?php $misVideos = $Objeto->seleccionarVideos(17);
			foreach ($misVideos as $videos) { ?>

				<?php echo $videos['url']; ?>
				<h3 class="fuente-playfair url"><?php echo $videos['titulo'] ?></h3>

		<?php } ?>

	</section>

</section>
<!-- ************************************************ -->

<section class="row opinion-clientes">
<h1>LO QUE OPINAN MIS CLIENTES</h1>
</section>

<section class="papel-roto">
<figure><img class="img-responsive" src="View/img/papel-roto.png" /></figure>
</section>

<section class="row banner-comentarios">
<section class="container carousel slide" data-ride="carousel" id="myCarousel"><!-- Indicators -->
<ol class="carousel-indicators">
	<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
	<li data-slide-to="1" data-target="#myCarousel"></li>
	<li data-slide-to="2" data-target="#myCarousel"></li>
	<li data-slide-to="3" data-target="#myCarousel"></li>
</ol>
<!-- Wrapper for slides -->

<section class="carousel-inner" role="listbox">

	<section class="item active">
	<?php 
		$misDatos = $Objeto->seleccionar('opiniones','id_o',1);
		foreach ($misDatos as $datos) { ?>
			<article>
				<p class="fuente-playfair"><span class="comillas"></span> <?php echo $datos['opinion'] ?><span class="comillas">&quot;</span></p>
			</article>

			<p><?php echo $datos['opinador']; ?></p>

	<?php } ?>

	</section>

	<section class="item">
	<?php 
		$misDatos = $Objeto->seleccionar('opiniones','id_o',2);
		foreach ($misDatos as $datos) { ?>
			<article>
				<p class="fuente-playfair"><span class="comillas"></span> <?php echo $datos['opinion'] ?><span class="comillas">&quot;</span></p>
			</article>

			<p><?php echo $datos['opinador']; ?></p>

	<?php } ?>
		</section>

	<section class="item">
	<?php 
		$misDatos = $Objeto->seleccionar('opiniones','id_o',3);
		foreach ($misDatos as $datos) { ?>
			<article>
				<p class="fuente-playfair"><span class="comillas"></span> <?php echo $datos['opinion'] ?><span class="comillas">&quot;</span></p>
			</article>

			<p><?php echo $datos['opinador']; ?></p>

	<?php } ?>
	</section>

	<section class="item">
	<?php 
		$misDatos = $Objeto->seleccionar('opiniones','id_o',4);
		foreach ($misDatos as $datos) { ?>
			<article>
				<p class="fuente-playfair"><span class="comillas"></span> <?php echo $datos['opinion'] ?><span class="comillas">&quot;</span></p>
			</article>

			<p><?php echo $datos['opinador']; ?></p>

	<?php } ?>
	</section>
</section>

<!-- Left and right controls --><a class="left carousel-control" data-slide="prev" href="#myCarousel" role="button"><span class="sr-only">Previous</span> </a> <a class="right carousel-control" data-slide="next" href="#myCarousel" role="button"> <span class="sr-only">Next</span> </a></section>
</section>

<section class="papel-roto">
<figure><img alt="" class="img-responsive" src="View/img/papel-roto-rotado.png" /></figure>
</section>

<section class="redes-sociales" id="contacto">
	<section class="row">
		<section class="col-md-12 text center">
			<h3 class="fuente-playfair">Sigueme en</h3>
		</section>
	</section>

	<section class="row iconos-redes-sociales text-center">

		

		<section class="col-xs-12 col-sm-3 col-md-3">
			<section class="item-redes-sociales">

			<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',6);
			  foreach ($misImagenes as $imagen) { ?>
				
				<img src="View/img/<?php echo $imagen['nombre_imagen'] ?>"/>				

			<?php } ?>

			 <?php $misDatos = $Objeto->seleccionar('contacto','id',3);
			 	foreach ($misDatos as $datos) {

			 	 echo $datos['nomb_usu'];
			 	}

 				?>
	
			
			</section>
		</section>


		<section class="col-xs-12 col-sm-3 col-md-3">
			<section class="item-redes-sociales">

				<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',7);
			 		 foreach ($misImagenes as $imagen) { ?>
				
					<img src="View/img/<?php echo $imagen['nombre_imagen'] ?>"/>				

				<?php } ?>

			 	<?php $misDatos = $Objeto->seleccionar('contacto','id',4);
			 		foreach ($misDatos as $datos) {

			 		 echo $datos['nomb_usu'];
			 		}
			 	
 				?>
			</section>
		</section>

		<section class="col-xs-12 col-sm-3 col-md-3">
			<section class="item-redes-sociales">
				<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',8);
			 		 foreach ($misImagenes as $imagen) { ?>
				
					<img src="View/img/<?php echo $imagen['nombre_imagen'] ?>"/>				

				<?php } ?>

			 	<?php $misDatos = $Objeto->seleccionar('contacto','id',5);
			 		foreach ($misDatos as $datos) {

			 		 echo $datos['nomb_usu'];
			 		}
			 	
 				?>
			</section>
		</section>

		<section class="col-xs-12 col-sm-3 col-md-3">
			<section class="item-redes-sociales">
				<?php $misImagenes = $Objeto->seleccionarImagen('imagenes_cargadas',9);
			 		 foreach ($misImagenes as $imagen) { ?>
				
					<img src="View/img/<?php echo $imagen['nombre_imagen'] ?>"/>				

				<?php } ?>

			 	<?php $misDatos = $Objeto->seleccionar('contacto','id',6);
			 		foreach ($misDatos as $datos) {

			 		 echo $datos['nomb_usu'];
			 		}
			 	
 				?>
				
			</section>
		</section>

	</section>

</section>

<!-- 	SECCCIONDE FORM-CONTACTO -->

<section class="row form-contacto">
<section class="col-md-3 col-xm-12 col-ms-3"></section>

<section class="col-md-6 col-xs-12 col-ms-6">
<h3 class="fuente-playfair text-center">Si quieres mas informacion no dudes en escribirme.</h3>

<form action="envioCorreo.php" method="post" role="form">&nbsp;
<section class="nota text-left">
<p class="fuente-playfair">Los campos con <span class="obligatorio"> * </span> son obligatorios.</p>
</section>

<section class="row form-group">
<h4><label class="fuente-playfair" for="nombre">Nombre<span class="obligatorio"> *</span></label></h4>
<input class="form-control" id="nombre" name="nombre" required="" type="text" /></section>

<section class="form-group">
<h4><label class="fuente-playfair" for="email">Email<span class="obligatorio"> *</span></label></h4>
<input class="form-control" id="email" name="email" required="" type="text" /></section>

<section class="form-group">
<h4><label class="fuente-playfair" for="asunto">Asunto<span class="obligatorio"> *</span></label></h4>
<input class="form-control" id="asunto" name="asunto" required="" type="text" /></section>

<section class="form-group">
<h4><label class="fuente-playfair" for="mensaje">Mensaje<span class="obligatorio"> *</span></label></h4>
<textarea class="form-control" cols="30" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required="" rows="10"></textarea></section>

<section class="nota text-center">
<p class="fuente-playfair">La informaci&oacute;n aqu&iacute; suministrada se podra utilizar para fines informativo de nuevos productos musicales y/o informaci&oacute;n general relacionada con Argenis Contreras.</p>
</section>
<button class="enviar btn btn-primary fuente-playfair" type="submit">Enviar a Argenis</button></form>
</section>

<section class="col-md-3 col-xm-12 col-ms-3"></section>
</section>

<?php include_once ("View/footer.php"); ?>

</section>
	<!-- Fin contenido principal --><!-- Enlaces a Librerias JS -->
	<script src="View/js/jquery-3.1.1.min.js"></script>
	<script src="View/js/configuracion-menu-mobile.js"></script>
	<script src="View/js/bootstrap.min.js"></script>
	<script src="View/js/boton_subir.js"></script>
</body>
</html>