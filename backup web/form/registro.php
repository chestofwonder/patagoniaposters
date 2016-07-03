<html>
<link rel='stylesheet' href='estilo.css' type='text/css' media='all'>
<SCRIPT LANGUAGE="JavaScript"> 
function cerrar(){  
self.close(); 
window.open("http://patagoniaposters.cl",target="_parent",""); 
} 
</script> 

<?php

//Recibir
 $algo = strip_tags($_POST['algo']);
 $nombre = strip_tags($_POST['nombre']);
 $mail = strip_tags($_POST['mail']);
 $consulta = strip_tags($_POST['consulta']);
 $email_to = "julietafcanepa@gmail.com";
$email_subject = "Solicitud de compra de ".$_POST['algo']."";
 $query = @mysql_query('SELECT * FROM formulario WHERE mail="'.mysql_real_escape_string($mail).'"');
 
 
 //
 $email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Consulta: " . $_POST['consulta'] . "\n";
 //
  $headers = 'From: '.$mail."\r\n".
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

 //
 if($existe = @mysql_fetch_object($query))
 {
 echo 'El mail '.$mail.' ya ha sido inscripto.';
 }
 else{
 $meter = @mysql_query('INSERT INTO formulario (apellido,nombre,institucion,cargo,mail,telefono,ciudad ,dni) values ("'.mysql_real_escape_string($apellido).'", "'.mysql_real_escape_string($nombre).'", "'.mysql_real_escape_string($institucion).'","'.mysql_real_escape_string($cargo).'", "'.mysql_real_escape_string($mail).'", "'.mysql_real_escape_string($telefono).'","'.mysql_real_escape_string($ciudad).'","'.mysql_real_escape_string($dni).'")');
 if($meter)
 {
 echo "<div id='marca'><img src='web-05.jpg'  width='289' height='96' /></div>"
;

 }else{
echo "<script languaje=\'javascript\'>cerrar()</script>";
 }
 }
 ?>
 </html>
