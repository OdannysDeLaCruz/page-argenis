<?php 

include_once('Model/procesarDatosModel.php');
$objeto = new procesarDatos();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>

<?php 


if (isset($_GET['id'])) { 

	$objeto->eliminarGaleria($_GET['id']);
	header("location:editar-galeria.php");
	

}
else {
	echo "No";
}

 ?>


</body>
</html>