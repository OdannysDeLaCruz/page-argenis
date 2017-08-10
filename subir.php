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

<?php error_reporting(E_ALL ^ E_NOTICE);

	  $id = $_GET['id'];
	 


 ?>
	<section class="col-md-10 panel-edicion">

		<form action="Controller/subirImagenController.php" method="post" enctype="multipart/form-data">
			
			<section class="row seccion_subir_imagen text-center">
					
				<h1 class="item_subir_imagen">Subir imagen</h1>

				<input type="file" name="imagen" class="item_subir_imagen imagen form-control">

				<input type="text" name="id" value="<?php echo $id; ?>">

				<input type="submit" value="Subir" class="item_subir_imagen boton_enviar btn btn-primary">

			</section>

		</form>

	</section>
	<section class="row">
		 <section class="col-sm-10 col-md-10 imagenes_subidas">
		 	
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			<img class="item_imagen" src="View/img/fondo-instrumentos.jpg" alt="">
			
		 </section>
	</section>

	

	<footer>

		<section class="col-xs-12 col-md-10"><h4>Argenis Contreras | Derechos reserados 2016</h4></section>
		<section class="col-xs-12 col-md-10"><h4>Diseño y Desarrollo por Odannys De La Cruz</h4></section>

	</footer>

	
</section>
	

</body>
</html>
