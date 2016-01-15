<?php
/* http://programarenphp.wordpress.com
primero creamos nuestra conexion tanto con el 
mysql, como con la base de datos, recuerda que 
el nombre del host, del user y del pass los 
debes de cambiar por los de tu configuraci�n*/

// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}

/********************************************
iniciamos el ciclo con el que obtendremos lo que envio el formulario
**************************************************************/
foreach ($_POST['seleccion'] as $indice => $valor){
//Vamos a verificar si trae la opcion de eliminar o modificar
$opcion = substr ($_POST['seleccion'][$indice],0,-1); //extraemos la parte de la cadena que elimina y/o modifica
switch($opcion){
//generamos la sentencia para la modificaci�n filtrando por el id para que solo cambie ese registro
	case 'modifica':$sql="UPDATE panel SET
						  poster='".$_POST["poster"][$indice]."',
						  stock='".$_POST["stock"][$indice]."',
						  descripcion='".$_POST["descripcion"][$indice]."',
						  medidas='".$_POST["medidas"][$indice]."',
						  precio='".$_POST["precio"][$indice]."',
					  	  preciod='".$_POST["preciod"][$indice]."',
					  	  internacional='".$_POST["internacional"][$indice]."',						  					  						  
					  	  internacionalp='".$_POST["internacionalp"][$indice]."',						  					  						  
						  costo='".$_POST["costo"][$indice]."'
						  WHERE id=".$_POST["id"][$indice];break;
	case 'elimina':$sql="DELETE FROM panell WHERE id=".$_POST['id'][$indice];break;
	default: echo "<center>NO HAY NADA SELECCIONADO</center>"; break;
}
$resultado = mysql_query($sql);
if (! $resultado ){die ("ERROR AL EJECUTAR LA CONSULTA".$_POST['seleccion'].":".mysql_error());}
else{
	echo "<center>Datos ingresados correctamente</center><br />
	<a href='index.php'>Volver al panell</a>";
}
}
?>
