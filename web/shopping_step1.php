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
	<script type="text/javascript" src="js/custom/shopping.js"></script>
  </head>
  <body>
	<script>
      dataLayer = [ {
	} ];
	</script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PX9S45"
					  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>( function ( w, d, s, l, i ) {
	w[l] = w[l] || [ ];
	w[l].push( { 'gtm.start':
	      new Date().getTime(), event: 'gtm.js' } );
	var f = d.getElementsByTagName( s )[0],
	    j = d.createElement( s ), dl = l != 'dataLayer' ? '&l=' + l : '';
	j.async = true;
	j.src =
	    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
	f.parentNode.insertBefore( j, f );
      } )( window, document, 'script', 'dataLayer', 'GTM-PX9S45' );</script>
	<!-- End Google Tag Manager -->


	<?php
// Database initialization. Create $conn var and selects "tagoni81_datos" database
	if ( file_exists( 'db_connection.php' ) ) {
	  include_once 'db_connection.php';
	}
	?>

<?php //var_dump($_COOKIE['lang']);  ?>

	<div id="wrapper">
	  <br/>
	  <h1>CARRITO DE LA COMPRA</h1>
	  <br/>
	  <br/>
	  <div id="wrapper_products">
		<h2>Productos</h2>

		<table id="table_products">
		  <tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Medidas</th>
			<th>Precio<br/>(Nacional)</th>
			<th>Precio<br/>(Internacional)</th>
		  </tr>
		  <?php
		  foreach ( $_COOKIE as $cookie_name => $cookie_value ) {

			if ( strpos( $cookie_name, 'www_patagoniaposters_cl:add_poster_' ) !== false ) {
			  if ( $cookie_value > 0 ) {
				$poster_id	 = substr( $cookie_name, $cookie_name . lenght - 1, 1 );
				mysql_query( "set names 'utf8'" );
				$sql		 = "SELECT * FROM panel WHERE id = '" . $poster_id . "'";
				$resultado	 = mysql_query( $sql );
				$row		 = mysql_fetch_array( $resultado, MYSQL_ASSOC );

				echo '<tr>';

				echo '<td class="poster_mini" rowspan="1"><p>' . $row[ 'poster' ] . '<p><img src="assets/images/posters0' . $poster_id . '.jpg" /></td>';
				echo '<td class="product_quantity" ><input type="number" min="0" max="999" step="1" id="quantity_' . $cookie_name . '" value="' . $cookie_value . '"/></td>';
				echo '<td class="size">' . $row[ 'medidas' ] . '</td>';

				$precio_nac	 = str_replace( '$ch', '', $row[ 'precio' ] );
				$precio_nac	 = str_replace( '.', '', $precio_nac );
				$precio_nac	 = number_format( $precio_nac, 0, ",", "." );
				echo '<td class="price_nacional"><label class="ch_currency">$ch</label><label class="prize">' . $precio_nac . '</label></td>';

				$precio_int	 = str_replace( 'USD', '', $row[ 'preciod' ] );
				$precio_int	 = str_replace( '.', '', $precio_int );
				$precio_int	 = number_format( $precio_int, 0, ",", "." );
				echo '<td class="price_internacional"><label class="USD_currency">USD</label><label class="prize">' . $precio_int . '</label></td>';

				echo '</tr>';
			  }
			}
		  }
		  ?>	

		</table>
	  </div>

	  <div id="wrapper_send_info">

		<h2>Información del Envío</h2>

		<form action="shopping_step2.php" method="POST" target="_self">

		  <div id="packaging_quantity_div">
			<label>Tubos de pósters</label>
			<input type="text" id="packaging_quantity" value="" />
		  </div>

		  <div id="packaging_quantity_collections_div">
			<label>Carpetas de colecciones</label>
			<input type="text" id="packaging_quantity_collections" value="" />
		  </div>

		  <div>
			<label>Subtotal</label>
			<label class="currency"></label>
			<input type="text"  id="subtotal" name="subtotal" readonly="readonly" value="125" />
		  </div>

		  <div>
			<label for="sending_zone">Zona de envío</label>
			<select id="sending_zone" name="sending_zone">
			  <option value="america">América</option>
			  <option value="europa">Europa</option>
			  <option value="asia">Asia</option>
			  <option  value="africa_oceania">África/Oceanía</option>
			</select>
		  </div>

		  <div>
			<label>Gastos de envío</label>
			<label class="currency"></label>
			<input name="sending_costs" data-toggle="popover" data-html="true" data-placement="bottom" data-trigger="focus" title="Peso excedido para el envío por correo" data-content="" type="text" id="sending_costs" readonly="readonly" value="" />
		  </div>

		  <div>
			<label>Total</label>
			<label class="currency"></label><input type="text" id="total" readonly="readonly" value="" />
		  </div>

		  <input type="image" id="checkout" src="assets/images/btns/btn_carrito.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		  <a href="form/request_form.php" id="checkout_other_payment" target="_self"><img src="assets/images/btns/btn_otromedio.png"></a>
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

