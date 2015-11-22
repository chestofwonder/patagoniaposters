<HTML>
<HEAD>
<TITLE>Panel Patagonia Posters</TITLE>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">

</HEAD>
<BODY>
<input class='aceptar' type='submit' value='Ingles' onclick="window.location='/panel/ingles.php';" /> 
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

/********************************************/
/* Luego vamos a obtener todos los datos que esten contenidos 
en la tabla con una consulta */
$sql = "SELECT * FROM panel";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
echo "
		<H1></H1>

		<H1>PATAGONIA POSTERS</H1>
		<p>PANEL DE ADMINISTRACIÓN (ESPAÑOL)</p>
		
			<table id='tabla'>		<form name='ejecuta' method='post' action='ejecuta.php'>

				<tr id='tabla1'><td>Id</td><td>Poster</td><td class='gris'>Stock</td><td>Descripción</td><td class='gris'>Medidas</td><td>Precio</td><td> </td><td class='gris'>Envio Chile</td><td class='internacional'>Envio Inter</td><td>nacional</td><td> </td><td>M</td></tr>";
$i = 0 ; 
 
while ($row = mysql_fetch_row($resultado)){
			echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td id='poster'><input type='hidden' name='poster[$i]' value='".$row[1]."' />".$row[1]."</td>
					  <td class='gris' ><input id='stock'type='text' name='stock[$i]' value='".$row[2]."'/></td>
					  <td> <textarea id='descripcion' name='descripcion[$i]' >".$row[3]."</textarea></td>
					  <td class='gris'><input id='medidas' type='text' name='medidas[$i]' value='".$row[4]."'/></td>
					   <td><input id='precio'type='text' name='precio[$i]' value='".$row[5]."'/></td>
					   <td><input class='preciod' type='number' name='preciod[$i]' value='".$row[8]."'/></td>
					   <td class='gris'><input id='precio' type='text' name='costo[$i]' value='".$row[6]."'/></td>
   					   <td><input id='precio'type='text' name='internacionalp[$i]' value='".$row[10]."'/></td>
					   <td class='usd'>USD <input class='preciod' type='number' name='internacional[$i]' value='".$row[7]."'/></td>
					  <td><input type='checkbox' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta línea es para saber si se modifica -->
					  </tr>";$i++; 
}
echo "</table><input type='submit' value='Aceptar'></form>";


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
				<tr id='tabla1'><td>Id</td><td>Promo</td><td>Descripción</td><td>  Precio Nacional</td><td>Precio Internacional</td><td>Modificar</td></tr>";
$i = 0 ; 
 
while ($row = mysql_fetch_row($resultado)){
			echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td><input type='text' name='nombre[$i]' value='".$row[1]."'/></td>
					  <td> <textarea id='descripcion' name='descripcion[$i]' >".$row[2]."</textarea></td>
  					  <td> $ cl<input type='text' name='nacional[$i]' value='".$row[3]."'/></td>
					  <td>USD<input type='text' name='internacional[$i]' value='".$row[4]."'/></td>
					  <td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta línea es para saber si se modifica -->
					  </tr>";$i++;
				  
}

echo "</table><input type='submit' value='Aceptar'></form>";

?>

</BODY>
</HTML>