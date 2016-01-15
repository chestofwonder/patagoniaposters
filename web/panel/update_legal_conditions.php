<?php

// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}

/*var_dump($_GET['lang']);
var_dump($_POST);
var_dump($_FILES);

var_dump(file_exists($_FILES["message"]['tmp_name']));*/
$myfile = fopen($_FILES["message"]['tmp_name'], "r") or die("Unable to open file!");
$message = fread($myfile,filesize($_FILES["message"]['tmp_name']));
fclose($myfile);

//mysql_query("set names 'utf8'");
$sql	=	'UPDATE legal_conditions SET message = "' . $message . '"  WHERE lang = ' . $_GET['lang'] . "'";

$result	=	mysql_query($sql,	$con);

var_dump($result);
echo	"<div style='text-align:center;margin-top:45px;'>";
echo	"<p style='font-size:12px;font-family:verdana;margin-bottom:35px;'>Datos actualizados</p>";
echo	"<a href="	.	$_SERVER['HTTP_REFERER']	.	" style='font-size:10px;font-family:arial;text-decoration:none;color:#FFF;border:0px;padding:10px 15px;background:#F1826A none repeat scroll 0% 0%;'>Volver al panel</a>";
echo	"</div>";

