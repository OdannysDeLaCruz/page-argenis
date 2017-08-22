<?php 

$destino = "ingargenis@hotmail.com";
$email   = $_POST['email'];
$nombre  = utf8_decode($_POST['nombre']);
$asunto  = utf8_decode($_POST['asunto']);
$mensaje = utf8_decode($_POST['mensaje']);

$mensaje = wordwrap($mensaje, 70, "\r\n");

$contenido = "\nNombre: " . $nombre . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

$cabeceras = 'From: argenisc@host2.planetahosting.com.co'  . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($destino, $asunto, $contenido,$cabeceras)) {	

	header("Location: mensaje.html");	
}

else {
	echo "Error al enviar";
}




 ?>