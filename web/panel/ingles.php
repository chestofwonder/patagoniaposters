<?php
ini_set('session.gc_maxlifetime', 1800);
session_set_cookie_params(1800);
session_start();

if(empty($_SESSION["user"])){
header('Location: ../security/login_form.html');
die();
}else{
session_unset;
}
?>

<!DOCTYPE html> 
<html>
		<head>
				<meta charset="UTF-8">
				<title>Panel Patagonia Posters</title>
				<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
				<link rel="stylesheet" href="/css/security.css" type="text/css" media="all">
				<script src='../js/jquery.js' type='text/javascript'></script>
				<script src='../js/custom/panel.js' type='text/javascript'></script>
		</head>
		<body>
					<header id="panel_options">
							<input id="change_language" type="button" value="Español" onClick="window.location = '/panel/index.php';" /> 
						<form id="logout_form" action="../security/logout.php" method="post">
<label>Estás logado como: <?php echo $_SESSION["user"]; ?></label>
<input type="submit" value="Salir" />
</form>
				</header>
				
				<?php
				if	(file_exists('../db_connection.php'))	{
				include_once	'../db_connection.php';
				}
				$sql	=	"SELECT * FROM paneng";

				$resultado	=	mysql_query($sql);

				echo	"

		<H1>PATAGONIA POSTERS</H1>
		<p>PANEL DE ADMINISTRACIÓN (INGLÉS)</p>
		
			<table class='tabla'>		<form name='ejecuta' method='post' action='ejecutaeng.php'>

				<tr class='tabla1'><td>Id</td><td>Poster</td><td class='gris'>Stock</td><td>Descripción</td><td class='gris'>Medidas</td><td>Precio</td><td> </td><td class='gris'>Envio Chile</td><td class='internacional'>Envio Inter</td><td>nacional</td><td> </td><td>M</td></tr>";
				$i	=	0;

				while	($row	=	mysql_fetch_row($resultado))	{
				echo	"<tr><td><input type='hidden' name='id[$i]' value='"	.	$row[0]	.	"' />"	.	$row[0]	.	"</td>
			          <td id='poster'><input type='hidden' name='poster[$i]' value='"	.	$row[1]	.	"' />"	.	$row[1]	.	"</td>
					  <td class='gris' ><input id='stock'type='text' name='stock[$i]' value='"	.	$row[2]	.	"'/></td>
					  <td> <textarea id='descripcion' name='descripcion[$i]' >"	.	$row[3]	.	"</textarea></td>
					  <td class='gris'><input id='medidas' type='text' name='medidas[$i]' value='"	.	$row[4]	.	"'/></td>
					   <td><input id='precio'type='text' name='precio[$i]' value='"	.	$row[5]	.	"'/></td>
					   <td><input class='preciod' type='number' name='preciod[$i]' value='"	.	$row[8]	.	"'/></td>
					   <td class='gris'><input id='precio' type='text' name='costo[$i]' value='"	.	$row[6]	.	"'/></td>
   					   <td><input id='precio'type='text' name='internacionalp[$i]' value='"	.	$row[10]	.	"'/></td>
					   <td class='usd'>USD <input class='preciod' type='number' name='internacional[$i]' value='"	.	$row[7]	.	"'/></td>
					  <td><input type='checkbox' name='seleccion[$i]' value='modifica"	.	$row[0]	.	"'></td>
					  </tr>";
				$i++;
				}
				echo	"</table><input type='submit' value='Aceptar'></form>";

				/*					* ***************************************** */
				/* Luego vamos a obtener todos los datos que esten contenidos 
					 en la tabla con una consulta */
				$sql	=	"SELECT * FROM promen WHERE id = '1'";

				$resultado	=	mysql_query($sql);
				/* ahora creamos la tabla en html para mostrar los resultados
					 agregandole un par de botones de radio */
				echo	"
		<p>PROMOCIONES</p>
		
		<form name='ejecuta' method='post' action='ejecuta2promo.php'>
			<table class='tabla'>
				<tr class='tabla1'><td>Texto promociones</td></tr>";
				$i	=	0;

				while	($row	=	mysql_fetch_row($resultado))	{
				echo	"<tr>
					  <td> <textarea id='tablapromo' name='aclaracion[$i]' >"	.	$row[5]	.	"</textarea></td>
					  <td><input type='radio' name='seleccion[$i]' value='modifica"	.	$row[0]	.	"'></td><!-- Esta l�nea es para saber si se modifica -->
					  </tr>";
				$i++;
				}

				echo	"</table><input type='submit' id='submitpromo' value='Aceptar'></table></form>";
				?>

								<script>
	function validatePromosForm() {

 $('#num_promos').val(parseInt($('.single_promo').length));
	
	for (var i = 1; i <= $('#num_promos').val(); i++) {
	
	if ($('#eliminar' + i).is(":checked") === false) {
	
 if ($('#nombre' + i).val() === ''){ $('#required' + i).show(); return false; };
	if ($('#nacional' + i).val() === ''){ $('#required' + i).show(); return false; };
	if ($('#internacional' + i).val() === ''){ $('#required' + i).show(); return false; };
	if ($('#descripcion' + i).val() === ''){ $('#required' + i).show(); return false; };
	}

	}

	return true;
	}
								</script>

								<p>PROMOCIONES</p>

								<form name='ejecuta' method='post' action='ejecuta2.php/?table=promen' onsubmit="return validatePromosForm()">
										<table id='tabla_promociones'  class='tabla'>
												<tr class='tabla1'>
														<td>Id</td>
														<td>Promo</td>
														<td>Descripción</td>
														<td>Precio Nacional</td>
														<td>Precio Internacional</td>
														<td>Eliminar</td>
												</tr>

												<?php
												mysql_query("set names 'utf8'");
												$query	=	"SELECT * FROM promen ORDER BY id";
												$result	=	mysql_query($query);
												$i	=	0;
												while	($row	=	mysql_fetch_row($result))	{
												$i++;
												?>	
												<tr class='single_promo'>
														<td><input type='hidden' id='id<?php	echo	$i	?>' name='id<?php	echo	$i	?>' value='<?php	echo	$row[0]	?>' /><?php	echo	$row[0]	?></td>
														<td><input type='text' id='nombre<?php	echo	$i	?>' name='nombre<?php	echo	$i	?>' value='<?php	echo	$row[1]	?>'></td>
														<td><textarea id='descripcion<?php	echo	$i	?>' name='descripcion<?php	echo	$i	?>' ><?php	echo	$row[2]	?></textarea></td>
														<td> $ cl<input type='text' id='nacional<?php	echo	$i	?>' name='nacional<?php	echo	$i	?>' value='<?php	echo	$row[3]	?>' /></td>
														<td>USD<input type='text' id='internacional<?php	echo	$i	?>' name='internacional<?php	echo	$i	?>' value='<?php	echo	$row[4]	?>'/></td>
														<td><input type='checkbox' class='checkbox_delete_promo' value='eliminar<?php	echo	$i	?>' id='eliminar<?php	echo	$i	?>' name='eliminar<?php	echo	$i	?>' /></td>
												</tr>
												<?php	}	?>

										</table>
										<input type='hidden' id="num_promos" name='num_promos' value='' />
										<input type='submit' value='Aceptar' />
										<input type='button' id='button_add_promo' value='Añadir otra promoción' />
								</form>


		</body>
</html>