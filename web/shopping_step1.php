<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="height=device-height">
<meta name="description" content="Posters de Vintage de la Patagonia, descúbre el tuyo!
						Pinturas de Torres de Paine, Puerto Natales, Glaciares Grey y Perito Moreno, El Chaltén, Monte Fitz Roy.
						Obras originales de la artista patagónica Julieta Fernández Cánepa">
<meta name="keywords" content="">
<meta name="poster" content="patagonia posters, arte impreso, julieta fernandéz canepa, posters, poster, poster Vintage, vintage, torres de paine, puerto natales, cuernos del paine, THE BLUEST GREY EVER, EL CHALTÉN-MOUNT FITZ ROY, glaciar perito moreno, torres de paine, artista">

<meta name="author" content="">
<link rel="shortcut icon" href="assets/images/favicon.png" class="favicon_icon">

<title>Patagonia Posters | Posters Vintage de la Patagonia | Arte Impreso</title>

<link rel="stylesheet" href="css/shopping.css" >

<!-- Menu -->
<link rel="stylesheet" href="css/superfish.css" media="screen">

<!-- font -->
<link href="css/style_font.css" rel="stylesheet">

<!-- Revulation slider css -->
<link rel="stylesheet" type="text/css" href="css/rs-plugin/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/rs-plugin/css/settings.css" media="screen" />
<!--/ Revulation slider css -->

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
<link href="css/style_default.css" rel="stylesheet" >
<link href="css/color.css" rel="stylesheet"	id="clrswitch">

<link href="css/color_bg_white.css" rel="stylesheet" id="clrswitch_bg">
<link href="css/style-switcher.css" rel="stylesheet">

<!-- Isotop CSS -->
<link rel="stylesheet" type="text/css" href="assets/plugin/style/css/style_iso.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/plugin/style/css/media-queries.css" media="all" />

<!-- Uikit CSS -->
<link href="css/uikit.css" rel="stylesheet">
<link href="css/bjqs.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/swtch/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom/shopping_cookies.js"></script>
</head>
<body>

<?php
// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('db_connection.php'))	{
include_once	'db_connection.php';
}

// Sacar el contenido del carrito
/* 1.- sacar el contenido de las cookies
*  2.- buscar el poster en bbdd y pintarlos
 * 
 * Agrupar el carrito por paquetes
 * 
 * Seleccionar destino
 * 
 * Calcular coste
 * 1.- sumar coste de los poster
 * 2.- calcular gastos de envio por peso y destino
 * 
 * Crear boton de paypal y pasarle los datos
 */
/*

*/
//["www_patagoniaposters_cl:add_poster_1"]=> string(1) "1"

/*
internacional (precio de envio internacional en dolares)
nacionald (no se usa, es costo)
internacionalp (precio de envio internacional en pesos)
*/

?>
<div id="wrapper">
			<br/>
		<h1>CESTA DE LA COMPRA</h1>
		<br/>
		<br/>
<div id="wrapper_products">
		<h2>Productos</h2>
		
<table>
		<tr>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Medidas</th>
				<th>Precio</th>
		</tr>
<?php
foreach($_COOKIE as $cookie_name => $cookie_value){

if( strpos($cookie_name,'www_patagoniaposters_cl:add_poster_') !== false){
$poster_id = substr($cookie_name,	$cookie_name.lenght - 1,	1);
mysql_query("set names 'utf8'");
$sql	=	"SELECT * FROM panel WHERE id = '" . $poster_id . "'";
$resultado	=	mysql_query($sql);
$row	=	mysql_fetch_array($resultado, MYSQL_ASSOC);

echo '<tr>';
echo '<td rowspan="1" class="poster_mini"><p>'. $row['poster'] . '<p><img src="assets/images/posters01.jpg" /></td>';
echo '<td><input type="number" min="1" max="999" step="1" class="product_quantity" id="quantity_' . $cookie_name . '" value="' . $cookie_value .  '"/></td>';
echo '<td>' . $row['medidas'] .  '</td>';
echo '<td>' . $row['precio'] .  ' (USD ' . $row['preciod'] . ')</td>';
//echo '<td>Coste de Envío Nacional</td><td>' . $row['costo'] .  '</td>';
//echo '<td>Coste de Envío Internacional</td><td>' . $row['internacional'] .  ' (USD ' .  $row['internacionalp'] . ')</td>';
echo '</tr>';

}

}

?>	
		
</table>
</div>
	
<div id="wrapper_send_info">
		
		<h2>Información del Envío</h2>
		
		<form action="shopping_step2.php" method="POST" target="_self">
		<div>
		<label>Subtotal</label>
		<input type="text" readonly="readonly" value="USD 125" />
		</div>
		
		<div>
		<label>Número de tubos</label>
		<input type="number" min="1" max="999" step="1" value="1" />
		</div>
		
		<div>
		<label for="zone">Zona de envío</label>
		<select name="zone">
				<option>América 1</option>
				<option>América 2</option>
				<option>Europa</option>
				<option>Asia</option>
				<option>África/Oceanía</option>
		</select>
		</div>
		
		<div>
		<label>Gastos de envío</label>
		<input type="text" readonly="readonly" value="USD 50" />
		</div>
		
		<div>
		<label>Total</label>
		<input type="text" readonly="readonly" value="USD 175" />
		</div>
		
		<input type="submit" id="checkout" value="CONTINUAR">
		</form>
</div>
		
		
		

</div>	
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-modalmanager.js"></script>

<!-- revulation slider -->
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<!-- revulation slider -->

<!-- Isotop JS -->
<script type="text/javascript" src="assets/plugin/style/js/jquery.isotope.min.js"></script>
<!--/ Isotop JS -->

<!-- Circle Progress-->
<script src="js/jquery.inview.js"></script>
<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
<script type="text/javascript" src="js/jquery.easy-pie-chart1.js"></script>
<!-- Circle Progress-->

<script src="js/jquery.smooth-scroll.js"></script>
<script src="js/parallax.js" type="text/javascript" charset="utf-8"></script>
<script src="js/uikit.js"></script>

<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.fittext.js"></script>

<!-- Menu js-->
<script src="js/jquery.sticky.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.nav.js"></script>

<script src="js/contact_form.js"></script>

<!-- Home slider js-->
<script src="js/bjqs-1.3.min.js"></script>
<script src="js/jquery.secret-source.min.js"></script>
<!--/ Home slider js-->

<!-- Custom js-->
<script type="text/javascript" src="js/reversal-custom_default.js"></script>
<script src='jquery.zoom.js'></script>
</body>
</html>

