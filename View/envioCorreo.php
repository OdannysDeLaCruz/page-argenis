<?php 

$destino = "el_odanis321@hotmail.com";
$email   = $_POST['email'];
$nombre  = $_POST['nombre'];
$asunto  = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$mensaje = "<p>" . $mensaje . "<\p>";

$contenido = "De:" . $email . "\nNombre: " . $nombre . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

if (mail($destino, $asunto, $contenido)) {	

	header("Location: mensaje.html");	
}

else {
	echo "Error al enviar";
}




 ?>