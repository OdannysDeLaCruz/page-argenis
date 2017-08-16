<?php 
include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();

error_reporting(E_ALL ^ E_NOTICE);

$id = $_POST['id'];
$tabla = $_POST['tabla'];
$imagen = $_FILES['imagen']['name'];
$imagen_tamano = $_FILES['imagen']['size'];
$imagen_tipo = $_FILES['imagen']['type'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];
$imagen_error = $_FILES['imagen']['error'];

$resultado =  $objeto->subirImg($imagen,$imagen_tamano,$imagen_tipo,$imagen_tmp,$imagen_error);

if ($resultado == 1 || $resultado == 2 || $resultado == 7) {
	
	header('location:../View/tamanioExcedido.php');
}
elseif ($resultado == 3)
{
	header("location:../View/errorSubirImagen.php");
}
elseif ($resultado == 4)
{	
	header("location:../View/errorSubirImagen.php");
}
elseif ($resultado == 5)
{
	
	header('location:../View/subidaExcelente.php');
	echo $objeto->actualizarImg($imagen,$id);
}
elseif ($resultado == 6)
{
	
	header("location:../View/archivoErrado.php");
}


 ?>