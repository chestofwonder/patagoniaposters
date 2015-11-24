<?php

include_once '../db_connection.php';

for($i=1;$i<=$_POST["num_promos"];$i++){
//referencio los campos por el contador, pero cojo el id de base de datos por el value del campo id+contador
$query = "SELECT * FROM promos WHERE id = " . $_POST["id" . $i];
$result = mysql_query($query, $con);

if( mysql_num_rows($result) > 0 ){
//var_dump($_POST["eliminar" . $i]);
if($_POST["eliminar" . $i] == "eliminar" . $i){
//var_dump('$query');
// Delete existing promo
$query = "DELETE FROM promos WHERE id=" . $_POST["id" . $i];
var_dump($query);
$result = mysql_query($query, $con);
}else{

// Promo already exists, so update it
$query = "UPDATE promos SET nombre='" . $_POST["nombre" . $i] . "', "
. "descripcion='" . $_POST["descripcion" . $i] . "', "
. "nacional='" . $_POST["nacional" . $i] . "', "
. "internacional='" . $_POST["internacional" . $i] . "' " 
. "WHERE id=" . $_POST["id" . $i];
var_dump($query);
$result = mysql_query($query, $con);
}
}else if($_POST["eliminar" . $i] !== "on"){

// New promo, create it
$query = "INSERT INTO promos values("
. $_POST["id" . $i] . ", "
. "'" . $_POST['nombre' . $i] . "', " 
. "'" . $_POST['descripcion' . $i] . "', " 
. "'" . $_POST['nacional' . $i] . "', " 
. "'" . $_POST['internacional' . $i] . "', " 
. "'')";
var_dump($query);
$result = mysql_query($query, $con);
}
}

echo "<a href='index.php'>Volver al panell</a>";
exit();












$i = 1;
var_dump($_POST);
while (isset($_POST["id" .$i])) {
  
//var_dump($_POST["id" .$i]);
$query = "SELECT * FROM promos WHERE id = " . $i;
$result = mysql_query($query, $con);
//var_dump($query);
if( mysql_num_rows($result) > 0 ){
//var_dump($_POST["eliminar" . $i]);
if($_POST["eliminar" . $i] == "on"){
//var_dump('$query');
// Delete existing promo
$query = "DELETE FROM promos WHERE id=" . $i;
//var_dump($query);
//$result = mysql_query($query, $con);
}else{

// Promo already exists, so update it
$query = "UPDATE promos SET nombre='" . $_POST["nombre" . $i] . "', "
. "descripcion='" . $_POST["descripcion" . $i] . "', "
. "nacional='" . $_POST["nacional" . $i] . "', "
. "internacional='" . $_POST["internacional" . $i] . "' " 
. "WHERE id=" . $_POST["id" . $i];
//$result = mysql_query($query, $con);
}

}else if($_POST["eliminar" . $i] !== "on"){

// New promo, create it
$query = "INSERT INTO promos values(null, "
. "'" . $_POST['nombre' . $i] . "', " 
. "'" . $_POST['descripcion' . $i] . "', " 
. "'" . $_POST['nacional' . $i] . "', " 
. "'" . $_POST['internacional' . $i] . "', " 
. "'')";
//$result = mysql_query($query, $con);
}
 echo $i . " " .  $_POST["id" .$i] . "<br/>";
$i++;

}

					


foreach ($_POST['seleccion'] as $indice => $valor){

//Vamos a verificar si trae la opcion de eliminar o modificar
$opcion = substr ($_POST['seleccion'][$indice],0,-1); //extraemos la parte de la cadena que elimina y/o modifica

switch($opcion){
//generamos la sentencia para la modificaci�n filtrando por el id para que solo cambie ese registro
	case 'modifica':$sql="UPDATE promos SET
						  						  nombre='".$_POST["nombre"][$indice]."',
												  descripcion='".$_POST["descripcion"][$indice]."',	
												  nacional='".$_POST["nacional"][$indice]."',
												  internacional='".$_POST["internacional"][$indice]."'
						 						 WHERE id=".$_POST["id"][$indice];break;
	case 'elimina':$sql="DELETE FROM panel WHERE id=".$_POST['id'][$indice];break;
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
