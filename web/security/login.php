<!DOCTYPE html>
<html>
		<head>
				<link rel="stylesheet" type="text/css" href="../css/security.css" />
				<script type="text/javascript" src="../js/jquery.js"></script>
				<script type="text/javascript" src="../js/custom/security.js"></script>
		</head>
		<body>
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
echo '<div id="incorrect_login_message">';
echo '<p>Contraseña incorrecta</p>';
echo '<input id="button_back" type="button" value="Volver atrás" />';
echo '</div>';
die();
}

}else{
echo '<div id="incorrect_login_message">';
echo '<p>Usuario desconocido</p>';
echo '<input id="button_back" type="button" value="Volver atrás" />';
echo '</div>';
die();
}
?>
</body>
</html>