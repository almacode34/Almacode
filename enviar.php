<?php

//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$mensaje = addslashes($_POST['mensaje']);

//Preparamos el mensaje de contacto

$cabeceras = 'MIME-Version: 1.0'."\r\n";
$cabeceras .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto .= "Mensaje desde almacode.es"; //asunto aparecera en la bandeja del servidor de correo
$email_to .= "we@almacode.es"; //cambiar por tu email

$contenido .= "$nombre ha enviado un mensaje desde almacode.es:<br>"
. "Nombre: $nombre <br>"
. "Email: $email <br>"
. "Mensaje: <br> $mensaje <br>"
. "<br>";

//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

	//Si el mensaje se envía muestra una confirmación
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://www.almacode.es/mail-enviado.php\">"; 
	}
	else{

	//Si el mensaje no se envía muestra el mensaje de error
	die("Error: Su información no pudo ser enviada, intente más tarde");
	}

?>
