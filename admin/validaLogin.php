<?php
include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();
session_start();

error_reporting(E_ALL ^ E_NOTICE);

$usuario = $objeto->selectUsuario();

foreach ($usuario as $usu) 
{

	if ($_POST['usuario'] == $usu['usuarios'] && $_POST['clave'] == $usu['clave'] ) 
	{ 
		$_SESSION['usuario'] = $_POST['usuario']; 


		header('location:../editar_pagina.php');
		
	}
	else 
	{ 

		header('location:index.php');

	}
}


?>
