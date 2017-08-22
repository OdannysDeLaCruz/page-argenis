<?php 

include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesison</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/animate.css">

</head>
<body>
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
		
		<h1 class="items-form">Inicie sesion</h1>
		<div class="items-form">
			
			<label for="usuario">Usuario</label>
			<input type="text" required id="usuario" name="usuario">
			
		</div>
		<div class="items-form">
			
			<label for="clave">Clave</label>
			<input type="password" required id="clave" name="clave">

		</div>
		<div class="btn">
			<input type="submit" value="Enviar" class="btn-enviar" name="enviar">
		</div>
	</form>
	

<?php 

error_reporting(E_ALL ^ E_NOTICE);


if (isset($_POST['enviar']) && !empty($_POST['enviar'])) {

	$usuario = $objeto->selectUsuario();

	foreach ($usuario as $usu) 
	{

		if ($_POST['usuario'] == $usu['usuarios'] && $_POST['clave'] == $usu['clave'] ) 
		{ 

			session_start();
			$_SESSION['usuario'] = $_POST['usuario']; 
			header('location:../editar_pagina.php');
		}
		else 
		{ ?>

		<div class="animated fadeIn mensaje">
			<p class="texto">Usuario no registrado</p>
			
		</div>

<?php 

		}
	}

}

?>


</body>
</html>