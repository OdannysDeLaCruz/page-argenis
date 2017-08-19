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
			<a href="subir_imagen_secciones.php"><li><span class="glyphicon glyphicon-picture"></span> Imagenes de fondos</li></a>
		</ul>
	</nav>

</section>

<section class="row contenido_principal">

	<section class="col-md-10 panel-edicion">

		<form action="Controller/galeriaController.php" method="post" enctype="multipart/form-data">
			
			<section class="row seccion_subir_imagen text-center">
					
				<img class="item_subir_imagen logo_subir" src="View/img/logo_subir.png" width="100">

				<input type="hidden" name="tabla" value="galeria">

				<input type="file" name="imagen" class="item_subir_imagen input-imagen form-control">
				

				<input type="submit" value="Subir" class="item_subir_imagen btn-subir-imagen btn btn-primary">

			</section>

		</form>

	</section>	

	<section class="galeria">


	<?php  

		$imagenes = $Objeto->seleccionarImagen('galeria',null);

		foreach ($imagenes as $imagen) { ?>
		<div class="item_galeria">
			
			<img class="" src="View/img/galeria/<?php echo $imagen['imagen']; ?>">

			<a class="content-eliminar" href="eliminar_imagen_galeria.php?id=<?php echo $imagen['id']; ?>">
				<div>
					<img src="View/img/eliminar.png" class="btn-eliminar">
				</div>
			</a>

		</div>

	<?php }	?>
		
	</section>	
	
</section>
	

</body>
</html>
