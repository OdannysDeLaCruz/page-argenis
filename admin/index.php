<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesison</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/animate.css">

</head>
<body>

	<form  action="validaLogin.php" method="post">
		
		<div class="items-form">
			<h1>Inicie sesion</h1>
		</div>
		<div class="items-form">
			
			<label for="usuario">Usuario</label>
			<input type="text" required id="usuario" name="usuario">
			
		</div>
		<div class="items-form">
			
			<label for="clave">Clave</label>
			<input type="password" required id="clave" name="clave">

		</div>
		<div class="btn">
			<input type="submit" value="Entrar" class="btn-enviar" name="enviar">
		</div>
	</form>	

</body>
</html>