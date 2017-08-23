<?php 
include_once('Model/procesarDatosModel.php');
$objeto = new procesarDatos();

if (isset($_GET['id'])) { 

	//Borrar de la carpeta del servidor
	$objeto->borrarImagenServidor($_GET['id']);

	//Borrar de la base de datos
	$objeto->eliminarGaleria($_GET['id']);

}
else {
	echo "Error";
}

 ?>
