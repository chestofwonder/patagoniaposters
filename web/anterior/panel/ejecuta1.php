<?php
/* http://programarenphp.wordpress.com
primero creamos nuestra conexion tanto con el 
mysql, como con la base de datos, recuerda que 
el nombre del host, del user y del pass los 
debes de cambiar por los de tu configuración*/

$con = mysql_connect("localhost", "tagoni81_usuario", "Usuario1234");
if (! $con){die ("ERROR EN LA CONEXION CON MYSQL: ".mysql_error());}

$base = mysql_select_db ("tagoni81_datos",$con);

if(! $base){die ("ERROR AL CONECTAR CON LA BASE DE DATOS: ".mysql_error());}
/********************************************
iniciamos el ciclo con el que obtendremos lo que envio el formulario
**************************************************************/
foreach ($_POST['seleccion'] as $indice => $valor){
//Vamos a verificar si trae la opcion de eliminar o modificar
$opcion = substr ($_POST['seleccion'][$indice],0,-1); //extraemos la parte de la cadena que elimina y/o modifica
switch($opcion){
//generamos la sentencia para la modificación filtrando por el id para que solo cambie ese registro
	case 'modifica':$sql="UPDATE promos SET
						  						  nombre='".$_POST["nombre"][$indice]."',
												  descripcion='".$_POST["descripcion"][$indice]."',	
												  nacional='".$_POST["nacional"][$indice]."',
												  internacional='".$_POST["internacional"][$indice]."'
						 						 WHERE id=".$_POST["id"][$indice];break;
	case 'elimina':$sql="DELETE FROM panel WHERE id=".$_POST['id'][$indice];break;
	default: echo "<center>NO HAY NADA SELECCIONADO</center>"; break;
}
echo "Variable sql: ".$sql;
$resultado = mysql_query($sql);
if (! $resultado ){die ("ERROR AL EJECUTAR LA la la CONSULTA".$_POST['seleccion'].":".mysql_error());}
else{
	echo "<center>FELICIDADES SENTENCIA EJECUTADA CORRECTAMENTE</center><br />
	<a href='panel.html'>Volver al panel</a>";
}
}
?>
