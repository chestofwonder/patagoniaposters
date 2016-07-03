<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
</HEAD>
<BODY>
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
		<h1>MODIFICAR Y/O ELIMINAR</h1>
		
		<form name='ejecuta' method='post' action='ejecuta.php'>
			<table>
				<tr><td>Id</td><td>poster</td><td>stock</td><td>descripcion</td><td>medidas</td><td>precio</td><td>costo</td><td>Modificar</td><td>Eliminar</td></tr>";
$i = 0 ; //iniciamos nuestro cont en cero
/*el siguiente bucle nos permite obtener la informacion obtenida
de la ejecución de la sentencia de sql */
while ($row[1]){
			echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td><input type='text' name='poster[$i]' value='".$row[1]."' /></td>
					  <td><input type='text' name='stock[$i]' value='".$row[2]."'/></td>
					  <td><input type='text' name='descripcion[$i]' value='".$row[3]."'/></td>
					  <td><input type='text' name='medidas[$i]' value='".$row[4]."'/></td>
					   <td><input type='text' name='precio[$i]' value='".$row[5]."'/></td>
					   <td><input type='text' name='costo[$i]' value='".$row[6]."'/></td>
					  <td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta línea es para saber si se modifica -->
					  <td><input type='radio' name='seleccion[$i]' value='elimina".$row[0]."'></td><!-- Esta línea es para saber si se elimina -->
					  </tr>";$i1; 
}
echo "</table><input type='submit' value='Enviar'></form>";
?>

</BODY>
</HTML>