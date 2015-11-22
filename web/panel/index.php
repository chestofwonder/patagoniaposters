<HTML>
<HEAD>
<TITLE>Panel Patagonia Posters</TITLE>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">

</HEAD>
<BODY>
<input class='aceptar' type='submit' value='Ingles' onClick="window.location='/panel/ingles.php';" /> 
<?php
/* http://programarenphp.wordpress.com 
primero creamos nuestra conexion tanto con el 
mysql, como con la base de datos, recuerda que 
el nombre del host, del user y del pass los 
debes de cambiar por los de tu configuraci�n*/
if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}

/********************************************/
/* Luego vamos a obtener todos los datos que esten contenidos 
en la tabla con una consulta */
$sql = "SELECT * FROM panel";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
?>
		<H1>PATAGONIA POSTERS</H1>
		<p>PANEL DE ADMINISTRACIÓN (ESPAÑOL)</p>
		
			<table id='tabla'>		<form name='ejecuta' method='post' action='ejecuta.php'>

				<tr id='tabla1'>
				<td>Id</td>
				<td>Poster</td>
				<td class='gris'>Stock</td>
				<td>Descripci&oacute;n</td>
				<td class='gris'>Medidas</td>
				<td>Precio</td>
				<td> </td>
				<td class='gris'>Envio Chile</td>
				<td class='internacional'>Envio Inter</td>
				<td>nacional</td>
				<td> </td>
				<td>M</td>
				</tr>

				<?php
$i = 0 ; 
 
while ($row = mysql_fetch_row($resultado)){ ?>
	<tr>
<td><input type='hidden' name='id[<?php $i ?>]' value='<?php echo $row[0]; ?>' /><?php echo $row[0]; ?></td>
			          <td id='poster'><input type='hidden' name='poster[<?php $i ?>]' value='<?php echo $row[1]; ?>' /><?php echo $row[1]; ?></td>
					  <td class='gris' ><input id='stock'type='text' name='stock[<?php $i ?>]' value='<?php echo $row[2]; ?>'/></td>
					  <td> <textarea id='descripcion' name='descripcion[<?php $i ?>]' ><?php echo $row[3]; ?></textarea></td>
					  <td class='gris'><input id='medidas' type='text' name='medidas[<?php $i ?>]' value='<?php echo $row[4]; ?>'/></td>
					   <td><input id='precio'type='text' name='precio[<?php $i ?>]' value='<?php echo $row[5]; ?>'/></td>
					   <td><input class='preciod' type='number' name='preciod[<?php $i ?>]' value='<?php echo $row[8]; ?>'/></td>
					   <td class='gris'><input id='precio' type='text' name='costo[<?php $i ?>]' value='<?php echo $row[6]; ?>'/></td>
   					   <td><input id='precio'type='text' name='internacionalp[<?php $i ?>]' value='<?php echo $row[10]; ?>'/></td>
					   <td class='usd'>USD <input class='preciod' type='number' name='internacional[<?php $i ?>]' value='<?php echo $row[7]; ?>'/></td>
					  <td><input type='checkbox' name='seleccion[<?php $i ?>]' value='modifica<?php echo $row[0]; ?>'></td><!-- Esta l�nea es para saber si se modifica -->
					  </tr>
<?php $i++; 
}
echo "</table><input type='submit' value='Aceptar'></form>";

/* Luego vamos a obtener todos los datos que esten contenidos 
en la tabla con una consulta */
$sql = "SELECT * FROM promos WHERE id = '1'";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
echo "
		<p>PROMOCIONES</p>
		
		<form name='ejecuta' method='post' action='ejecuta2pro.php'>
			<table id='tabla'>
				<tr id='tabla1'><td>Texto promociones</td></tr>";
$i = 0 ; 
 
while ($row = mysql_fetch_row($resultado)){
			echo "<tr>
					  <td> <textarea id='tablapromo' name='aclaracion[$i]' >".$row[5]."</textarea></td>
					  <td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta l�nea es para saber si se modifica -->
					  </tr>";$i++;
					  
				  
}

echo "</table><input type='submit' id='submitpromo' value='Aceptar'></table></form>";
/********************************************/
/* Luego vamos a obtener todos los datos que esten contenidos 
en la tabla con una consulta */
$sql = "SELECT * FROM promos";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
echo "
		<p>PROMOCIONES</p>
		
		<form name='ejecuta' method='post' action='ejecuta2.php'>
			<table id='tabla'>
				<tr id='tabla1'><td>Id</td><td>Promo</td><td>Descripci�n</td><td>  Precio Nacional</td><td>Precio Internacional</td><td>Modificar</td></tr>";
$i = 0 ; 
 
while ($row = mysql_fetch_row($resultado)){
			echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td><input type='text' name='nombre[$i]' value='".$row[1]."'/></td>
					  <td> <textarea id='descripcion' name='descripcion[$i]' >".$row[2]."</textarea></td>
  					  <td> $ cl<input type='text' name='nacional[$i]' value='".$row[3]."'/></td>
					  <td>USD<input type='text' name='internacional[$i]' value='".$row[4]."'/></td>
					  <td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta l�nea es para saber si se modifica -->
					  </tr>";$i++;
				  
}

echo "</table><input type='submit' value='Aceptar'></form>";

?>

</BODY>
</HTML>