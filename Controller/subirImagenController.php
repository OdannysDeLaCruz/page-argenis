<?php 
include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();

error_reporting(E_ALL ^ E_NOTICE);

$id = $_POST['id'];
$imagen = $_FILES['imagen']['name'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];
$imagen_error = $_FILES['imagen']['error'];

$objeto->subirImg($imagen,$imagen_tmp,$imagen_error);

$objeto->subirImagen($imagen,$id);

echo "<br><a href='../subir_imagen_secciones.php'>Seguir Editando</a>";



 if ( $_GET['id'])
	 {
	 	$id = $_GET['id'];

	 	if ($id==1 || $id==2 || $id==3 || $id==4 || $id==5 ) 
	 	{

	 			
	 			
	 	}
	 	else if ($id==6 || $id==7 || $id==8 || $id==9)
	 	{
	 		echo "tabla contacto";

	 	}
	 	else
	 	{
	 		echo "Error";
	 	}

	 } 
	 else {

	 }

 ?>