<?php $lang = $_COOKIE['lang']; ?>
<?php

// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

mysql_query("set names 'utf8'");

$sql = 'UPDATE pesos SET peso = "' . $_POST["peso_poster"] . '"  WHERE producto = "poster"';
$result	=	mysql_query($sql,	$con);

$sql = 'UPDATE pesos SET peso = "' . $_POST["peso_coleccion"] . '"  WHERE producto = "coleccion"';
$result	=	mysql_query($sql,	$con);

//var_dump($result);
echo	"<div style='text-align:center;margin-top:45px;'>";
echo	"<p style='font-size:12px;font-family:verdana;margin-bottom:35px;'>Datos actualizados</p>";
echo	"<a href="	.	$_SERVER['HTTP_REFERER']	.	" style='font-size:10px;font-family:arial;text-decoration:none;color:#FFF;border:0px;padding:10px 15px;background:#F1826A none repeat scroll 0% 0%;'>Volver al panel</a>";
echo	"</div>";