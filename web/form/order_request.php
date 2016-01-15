<?php

$productos = strip_tags($_POST['productos']);
$nombre = strip_tags($_POST['nombre']);
$mail = strip_tags($_POST['mail']);
$consulta = strip_tags($_POST['consulta']);
//$email_to = "julietafcanepa@gmail.com";
$email_to = "goodooo30@gmail.com";
$email_subject = "Solicitud de compra";

$email_message .= "Carrito del cliente: \n\n";
$email_message .= $productos . "\n";
$email_message .= "\nDetalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Consulta: " . $_POST['consulta'] . "\n";


$headers = 'From: '.$mail."\r\n".
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
$res = mail($email_to, $email_subject, $email_message, $headers);


