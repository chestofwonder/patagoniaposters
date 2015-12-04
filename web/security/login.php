<?php
if($_POST['id_session'] !== 'eF4%$Ft3%'){
header('Location: login_form.html');
die();
}

if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}

$sql	=	"SELECT password FROM users WHERE user = '" . $_POST['user'] . "'";
$result	=	mysql_query($sql);

if	(mysql_num_rows($result)	>	0)	{
$row = mysql_fetch_array($result, MYSQLI_ASSOC);
if($row['password'] ===  $_POST['password']){
ini_set('session.gc_maxlifetime', 1800);
session_set_cookie_params(1800);
session_start();
$_SESSION["user"] = $_POST['user'];
header('Location: ../panel/index.php');
die();
}else{
echo '<p>Contraseña incorrecta</p>';
die();
}

}else{
echo '<p>Usuario desconocido</p>';
die();
}