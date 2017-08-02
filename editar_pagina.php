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
		</ul>
	</nav>

</section>


<section class="row contenido_principal">

	<section class="panel-edicion">

		<form action="Controller/recibeDatosController.php" method="post" enctype="multipart/form-data">

			<!-- DATOS DEL HEADER -->
<?php 
	
$misDatos = $Objeto->seleccionar('contenido','id_c',1);


 ?>
			<section class="header">

			<?php foreach ($misDatos as $datos) { ?>



				<section class="row titulo-subtitulo-header">
					<section class="col-md-12 text-center">							
						<input type="hidden" name="id_header" value="1">

						<h1><input type="text" name="titulo-header" class="titulo-header form-control" value="<?php echo $datos['titulo']; ?>"></h1>

						<input type="text" name="subtitulo-header" class="subtitulo-header form-control" value="<?php echo $datos['subtitulo']; ?>">

					</section>
				</section>

				<section class="contenido-header">
				
					<section class="row seccion-mensaje-header">
						<section class="col-md-12">
								
							<textarea name="mensaje-header" class="mensaje-header form-control" cols="60" rows="10"><?php echo $datos['mensaje']; ?>
							</textarea>
						</section>
							
					</section>
			<?php } ?>


<?php 
$misVideos = $Objeto->seleccionarVideos(1);
 ?>
 				
					<section class="row videos-header text-center">
 						<?php foreach ($misVideos as $videos) { ?>

							<section class="col-md-6">
								<input type="text" class="titulo-video-header-1 form-control" name="titulo-video-header-1" value="<?php echo $videos['titulo']; ?>"><br>

								<textarea name="url-video-header-1" class="url-video-header-1 form-control"  cols="30" rows="4"><?php echo $videos['url']; ?></textarea>
							
							</section>
 						<?php } ?>

<?php 
$misVideos = $Objeto->seleccionarVideos(2);
 ?>
 						<?php foreach ($misVideos as $videos) { ?>

							<section class="col-md-6">
								<input type="text" class="titulo-video-header-2 form-control" name="titulo-video-header-2" value="<?php echo $videos['titulo']; ?>"><br>
								<textarea name="url-video-header-2" class="url-video-header-2 form-control"  cols="30" rows="4"><?php echo $videos['url']; ?></textarea>

							</section>

						<?php } ?>						
			
					</section>

					<section class="row cambiar-imagen-header text-center">
						
						<p>Cambiar imagen de fondo de esta seccion.</p>
						<input type="file" name="imagen-header-fondo" class="imagen-header-fondo form-control">

					</section>				

				</section> <!-- FIN CONTENIDO HEADER -->
			

			</section> <!--FIN HEADER -->
				
			<!-- DATOS DE TIPO DE EVENTO -->
<?php 
$misDatos = $Objeto->seleccionar('contenido','id_c',2);
 ?>
			<section class="row tipo-evento">
			<?php foreach ($misDatos as $datos) { ?>

				<input type="hidden" name="id_tipo_evento" value="2">
				<h1><input type="text" class="titulo-tipo-evento form-control" name="titulo-tipo-evento" value="<?php echo $datos['titulo']; ?>"></h1>

				<textarea name="mensaje-tipo-evento" class="mensaje-tipo-evento form-control" cols="60" rows="2"><?php echo $datos['mensaje']; ?></textarea>
			<?php } ?>
			</section>

			<!-- SECCION 5-MUSICOS -->
<?php 
$misDatos = $Objeto->seleccionar('contenido','id_c',3);
 ?>
			<section class="row cinco-musicos">
			<?php foreach ($misDatos as $datos) { ?>

				<section class="col-md-6 text-center">
					
					<input type="hidden" name="id_cinco_musicos" value="3">
					<!-- Titulo -->
					<h3><input type="text" name="titulo-cinco-musicos" class="titulo-cinco-musicos form-control" value="<?php echo $datos['titulo']; ?>"></h3>

					<!-- Subtitulo -->
					<input type="text" name="subtitulo-cinco-musicos" class="subtitulo subtitulo-cinco-musicos form-control" value="<?php echo $datos['subtitulo']; ?>"><br><br>

					<p class="text-left">Separe el listado con dos puntos ( : )</p>
					<input type="text" class="listado-cinco-musicos form-control" name="listado-cinco-musicos" value="<?php echo $datos['mensaje']; ?>">

					<section class="cambiar-imagen-fondo">
						
						<p>Cambiar imagen de fondo de esta sección.</p>
						<input type="file" name="imagen-cinco-musicos" class="imagen-cinco-musicos form-control">

					</section>

				</section>
				<section class="col-md-6 videos-cinco-musicos text-center">
					
					<label>Nombre del video</label><br>		
					<input type="text" class="titulo-video-cinco-musicos-1 form-control" name="titulo-video-cinco-musicos-1" value="Titulo"><br>
					<label>Url del video</label><br>
					<input type="text" class="url-video-cinco-musicos-1 form-control" name="url-video-cinco-musicos-1" value="Url"><br><br>
					
					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-cinco-musicos-2 form-control" name="titulo-video-cinco-musicos-2" value="Titulo"><br>
					<label>Url del video</label><br>
					<input type="text" class="url-video-cinco-musicos-2 form-control" name="url-video-cinco-musicos-2" value="Url"><br><br>
					
					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-cinco-musicos-3 form-control" name="titulo-video-cinco-musicos-3" value="Titulo"><br>
					<label>Url del video</label><br>
					<input type="text" class="url-video-cinco-musicos-3 form-control" name="url-video-cinco-musicos-3" value="Url"><br>
			
				</section>
			<?php } ?>
			</section> <!-- FIN CINCO MUSICOS -->


			<!-- SECCION GRUPO COMPLETO -->
<?php 
$misDatos = $Objeto->seleccionar('contenido','id_c',4);
 ?>
			<section class="row grupo-completo">
			<?php foreach ($misDatos as $datos) { ?>

				<section class="col-md-6 videos-grupo-completo text-center">

					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-grupo-completo-1 form-control" name="titulo-video-grupo-completo-1" value="Titulo"><br>

					<label>Url del video</label><br>
					<input type="text" class="url-video-grupo-completo-1 form-control" name="url-video-grupo-completo-1" value="Url"><br><br>

					<label>Nombre del video</label><br>
					<input type="text" class="titulo-video-grupo-completo-2 form-control" name="titulo-video-grupo-completo-2" value="Titulo"><br>

					<label>Url del video</label><br>	
					<input type="text" class="url-video-grupo-completo-2 form-control" name="url-video-grupo-completo-2" value="Url"><br><br>

					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-grupo-completo-3 form-control" name="titulo-video-grupo-completo-3" value="Titulo"><br>
					<label>Url del video</label><br>
					<input type="text" class="url-video-grupo-completo-3 form-control" name="url-video-grupo-completo-3" value="Url"><br>

				</section>
				<section class="col-md-6 texto-grupo-completo text-center">

					<input type="hidden" name="id_grupo_completo" value="4">
					<!-- Titulo -->
					<h3><input type="text" class="titulo titulo-grupo-completo form-control" name="titulo-grupo-completo" value="<?php echo $datos['titulo']; ?>"></h3>

					<!-- Subtitulo -->
					<input type="text" class="subtitulo subtitulo-grupo-completo form-control" value="<?php echo $datos['subtitulo']; ?>"><br><br>
					
					<p class="text-left">Separe el listado con dos puntos( : )</p>
					<input type="text" class="listado-grupo-completo form-control" name="listado-grupo-completo" value="<?php echo $datos['mensaje']; ?>">
					
					<section class="cambiar-imagen-fondo">
							
						<p>Cambiar imagen de fondo de esta seccion.</p>
						<input type="file" class="imagen-grupo-completo form-control" name="imagen-grupo-completo">

					</section>
				</section>
			<?php } ?>
			</section> <!-- FIN GRUPO COMPLETO -->

			<!-- SECCION VALLENATO CON GUITARRA -->

<?php 
$misDatos = $Objeto->seleccionar('contenido','id_c',5);
 ?>
			<section class="row vallenato-guitarra">
			<?php foreach ($misDatos as $datos) { ?>

				<section class="col-md-6 text-center">

				<input type="hidden" name="id_vallenato_guitarra" value="5">
					<!-- Titulo -->
					<h3><input type="text" class="titulo titulo-vallenato-guitarra form-control" value="<?php echo $datos['titulo']; ?>"></h3>

					<!-- Subtitulo -->
					<input type="text" class="subtitulo subtitulo-vallenato-guitarra form-control" value="<?php echo $datos['subtitulo']; ?>"><br><br>
					
					<p class="text-left">Separe el listado con dos puntos ( : )</p>
					<input type="text" class="listado-vallenato-guitarra form-control" name="listado-vallenato-guitarra" value="<?php echo $datos['mensaje']; ?>">
					
					<section class="cambiar-imagen-fondo">
						
						<p>Cambiar imagen de fondo de esta seccion.</p>
						<input type="file" class="imagen-vallenato-guitarra form-control" name="imagen-vallenato-guitarra">

					</section>

				</section>
				<section class="col-md-6 videos-vallenato-guitarra text-center">

					<label>Nombre del video</label><br>		
					<input type="text" class="titulo-video-vallenato-guitarra-1 form-control" name="titulo-video-vallenato-guitarra-1" value="Titulo"><br>

					<label>Url del video</label><br>
					<input type="text" class="url-video-vallenato-guitarra-1 form-control" name="url-video-vallenato-guitarra-1" value="Url"><br><br> 

					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-vallenato-guitarra-2 form-control" name="titulo-video-vallenato-guitarra-2" value="Titulo"><br>

					<label>Url del video</label><br>
					<input type="text" class="url-video-vallenato-guitarra-2 form-control" name="url-video-vallenato-guitarra-2" value="Url"><br><br>	

					<label>Nombre del video</label><br>	
					<input type="text" class="titulo-video-vallenato-guitarra-3 form-control" name="titulo-video-vallenato-guitarra-3" value="Titulo"><br>

					<label>Url del video</label><br>	
					<input type="text" class="url-video-vallenato-guitarra-3 form-control" name="url-video-vallenato-guitarra-3" value="Url"><br>
				</section>
			<?php } ?>
			</section> <!-- FIN VALLENATO CON GUITARRA -->

			<!-- SECCION MAS TEMAS -->
<?php 
$misDatos = $Objeto->seleccionar('contenido','id_c',6);
 ?>
			<section class="mas-temas">
			<?php foreach ($misDatos as $datos) { ?>
				<section class="row">

					<input type="hidden" name="id_mas_temas" value="6">
					<br><h1><input type="text" class="titulo-mas-temas form-control" name="titulo-mas-temas" value="<?php echo $datos['titulo']; ?>"></h1><br><br>

					<section class="col-md-4">
						<label>Titulo y Url del video 1</label>
						<input type="text" class="titulo-video-mas-temas-1 form-control" name="titulo-video-mas-temas-1" value="video1">
						<input type="text" class="url-video-mas-temas-1 form-control" 
						name="url-video-mas-temas-1" value="url1">
					</section>
					<section class="col-md-4">
					<label>Titulo v Url del video 2</label>
						<input type="text" class="titulo-video-mas-temas-2 form-control" name="titulo-video-mas-temas-2" value="video2">
						<input type="text" class="url-video-mas-temas-2 form-control" 
						name="url-video-mas-temas-2" value="url2">
					</section>
					<section class="col-md-4">
					<label>Titulo v Url del video 3</label>
						<input type="text" class="titulo-video-mas-temas-3 form-control" name="titulo-video-mas-temas-3" value="video3">
						<input type="text" class="url-video-mas-temas-3 form-control" 
						name="url-video-mas-temas-3" value="url3">
					</section>
				</section>
				<section class="row">
					<section class="col-md-4">
						<label>Titulo v Url del video 4</label>
						<input type="text" class="titulo-video-mas-temas-4 form-control" name="titulo-video-mas-temas-4" value="video4">
						<input type="text" class="url-video-mas-temas-4 form-control" 
						name="url-video-mas-temas-4" value="url4">
					</section>
					<section class="col-md-4">
					<label>Titulo v Url del video 5</label>
						<input type="text" class="titulo-video-mas-temas-5 form-control" name="titulo-video-mas-temas-5" value="video5">
						<input type="text" class="url-video-mas-temas-5 form-control" 
						name="url-video-mas-temas-5" value="url5">
					</section>
					<section class="col-md-4">
					<label>Titulo v Url del video 6</label>
						<input type="text" class="titulo-video-mas-temas-6 form-control" name="titulo-video-mas-temas-6" value="video6">
						<input type="text" class="url-video-mas-temas-6 form-control" 
						name="url-video-mas-temas-6" value="url6">
					</section>
				</section>	 
				<section class="row cambiar-imagen-fondo-mas-temas">
					<p>Cambiar imagen de fondo de esta seccion.</p>
					<input type="file" class="imagen-mas-temas form-control" name="imagen-mas-temas">
				</section>		
			<?php } ?>	
			</section>
			<!-- FIN MAS TEMAS -->

			<!-- SECCION  OPINION DE CLIENTES -->

			<section class="row opinion-clientes">
				
				<br><h1 class="titulo-opinion-clientes">LO QUE OPINAN MIS CLIENTES</h1><br>
				
<?php 
$misDatos = $Objeto->seleccionar('opiniones','id_o',1);

 ?>
				<?php  foreach ($misDatos as $datos) { ?>

				<section class="col-sm-6 col-md-3 items-opi">
					<input type="text" class="opinador-1 form-control" name="opinador-1" value="<?php echo $datos['opinador']; ?>"><br>
					<textarea class="opinion-1 form-control" name="opinion-1" cols="30" rows="5"><?php echo $datos['opinion']; ?></textarea><br>
				</section>

				<?php } ?>

 <?php 
$misDatos = $Objeto->seleccionar('opiniones','id_o',2);
 ?>	
 				<?php  foreach ($misDatos as $datos) { ?>

 				<section class="col-sm-6 col-md-3 items-opi">
					<input type="text" class="opinador-2 form-control" name="opinador-2" value="<?php echo $datos['opinador']; ?>"><br>
					<textarea class="opinion-2 form-control" name="opinion-2" cols="30" rows="5"><?php echo $datos['opinion']; ?></textarea><br>
				</section>

				<?php } ?>
 <?php 
$misDatos = $Objeto->seleccionar('opiniones','id_o',3);
 ?>
 				<?php  foreach ($misDatos as $datos) { ?>
				<section class="col-sm-6 col-md-3 items-opi">
					<input type="text" class="opinador-3 form-control" name="opinador-3" value="<?php echo $datos['opinador']; ?>"><br>
					<textarea class="opinion-3 form-control" name="opinion-3" cols="30" rows="5"><?php echo $datos['opinion']; ?></textarea><br>
				</section> 
 				<?php } ?>
 <?php 
$misDatos = $Objeto->seleccionar('opiniones','id_o',4);
 ?>
 				<?php  foreach ($misDatos as $datos) { ?>
				<section class="col-sm-6 col-md-3 items-opi">
					<input type="text" class="opinador-4 form-control" name="opinador-4" value="<?php echo $datos['opinador']; ?>"><br>
					<textarea class="opinion-4 form-control" name="opinion-4" cols="30" rows="5"><?php echo $datos['opinion']; ?></textarea><br>
				</section> 
 				<?php } ?>				

			</section> <!-- FIN OPINION CLIENTES -->

			<!-- REDES SOCIALES Y DATOS DE CONTACTO -->
			<section class="row redes-sociales">

				<input type="hidden" name="id_redes" value="8">
				<h1 class="titulo-red-social">SIGUEME EN</h1><br><br>
 <?php 
$misDatos = $Objeto->seleccionar('contacto','id',3);
 ?>
				<?php  foreach ($misDatos as $datos) { ?>

				<section class="col-md-3">
					<section class="cambiar-imagen-fondo">
						<input type="text" class="red-social-1 form-control" name="red-social-1" value="<?php echo $datos['nomb_usu']; ?>"><br>
						
						<p>Cambie la imagen de la red social aquí.</p>
						<input type="file" class="imagen-red-social-1 form-control" name="imagen-red-social-1">

					</section>
				</section>

				<?php } ?>
 <?php 
$misDatos = $Objeto->seleccionar('contacto','id',4);
 ?>
				<?php  foreach ($misDatos as $datos) { ?>

				<section class="col-md-3">
					<section class="cambiar-imagen-fondo">
						<input type="text" class="red-social-2 form-control" name="red-social-2" value="<?php echo $datos['nomb_usu']; ?>"><br>
						
						<p>Cambie la imagen de la red social aquí.</p>
						<input type="file" class="imagen-red-social-2 form-control" name="imagen-red-social-2">

					</section>
				</section>

				<?php } ?>
 <?php 
$misDatos = $Objeto->seleccionar('contacto','id',5);
 ?>
				<?php  foreach ($misDatos as $datos) { ?>

				<section class="col-md-3">
					<section class="cambiar-imagen-fondo">
						<input type="text" class="red-social-3 form-control" name="red-social-3" value="<?php echo $datos['nomb_usu']; ?>"><br>
						
						<p>Cambie la imagen de la red social aquí.</p>
						<input type="file" class="imagen-red-social-3 form-control" name="imagen-red-social-3">

					</section>
				</section>

				<?php } ?>
 <?php 
$misDatos = $Objeto->seleccionar('contacto','id',6);
 ?>
				<?php  foreach ($misDatos as $datos) { ?>

				<section class="col-md-3">
					<section class="cambiar-imagen-fondo">
						<input type="text" class="red-social-4 form-control" name="red-social-4" value="<?php echo $datos['nomb_usu']; ?>"><br>
						
						<p>Cambie la imagen de la red social aquí.</p>
						<input type="file" class="imagen-red-social-4 form-control" name="imagen-red-social-4">

					</section>
				</section>

			<?php } ?>

			</section>

			<section class="row text-center seccion-numero-telefono">
				<p>Cambia tus numeros de contactos aquí</p>
<?php
$misDatos = $Objeto->seleccionar('contacto','id',1);
 ?>
				
			<?php  foreach ($misDatos as $datos) { ?>
				<input type="text" class="numero-telefono form-control" name="numero-telefono" value="<?php echo $datos['tel']; ?>">
			<?php } ?>

 <?php
$misDatos = $Objeto->seleccionar('contacto','id',2);
 ?>
			<?php  foreach ($misDatos as $datos) { ?>
				<input type="text" class="numero-telefono form-control" name="numero-telefono" value="<?php echo $datos['tel']; ?>">
			<?php } ?>
			</section>

			<!-- FIN DE REDES SOCIALES Y DATOS DE CONTACTO -->
			
			<footer class="row">
				<section class="col-md-6">
					<h4>Argenis Contreras | Derechos reserados 2016</h4>
				</section>
				<section class="col-md-6">
					<h4>Diseño y Desarrollo por Odannys De La Cruz</h4>
				</section>
			</footer>

			<input type="submit" class="btn btn-primary btn-enviar">
			
		</form> <!--FIN FORMULARIO DENTRO DE PANEL DE EDICION -->
		

	</section>	<!-- FIN PANEL DE EDICION -->
	

</section>

	

</body>
</html>
