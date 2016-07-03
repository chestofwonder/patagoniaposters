	<?php
				if	(file_exists('../db_connection.php'))	{
				include_once	'../db_connection.php';
				}

foreach ($_POST['seleccion'] as $indice => $valor){

$opcion = substr ($_POST['seleccion'][$indice],0,-1);
switch($opcion){

	case 'modifica':
	$sql= "UPDATE promos_info SET
												  message ='".$_POST["aclaracion"][$indice]."'
												  WHERE lang = '" . $_GET['lang'] . "'";
break;
}
$resultado = mysql_query($sql);
if (! $resultado ){die ("ERROR AL EJECUTAR LA CONSULTA".$_POST['seleccion'].":".mysql_error());}
else{
	echo "<center>Los datos se insertaron correctamente</center><br />";
	echo $_GET['lang'] == 'es' ? "<a href='index.php'>Volver al panel</a>" : "<a href='ingles.php'>Volver al panel</a>";
}
}
?>
