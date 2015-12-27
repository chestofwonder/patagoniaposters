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
  dataLayer = [{
    }];
  </script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PX9S45"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PX9S45');</script>
<!-- End Google Tag Manager -->


<?php
// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('db_connection.php'))	{
include_once	'db_connection.php';
}
?>
		
<div id="wrapper">
			<br/>
		<h1>CESTA DE LA COMPRA</h1>
		<br/>
		<br/>
	
<div id="wrapper_send_data">
		
		<h2>Datos de Envío</h2>
		
		<div>
		<label for="name">Nombre</label>
		<input type="text" name="name">
		</div>
		
		<div>
		<label for="surename">Apellidos</label>
		<input type="text" name="surename">
		</div>
		
		<div>
		<label for="address">Dirección (calle, plaza, ...)</label>
		<input type="text" name="address">
		</div>
		
		<div>
		<label for="address">Provincia</label>
		<input type="text" name="address">
		</div>
		
		<div>
		<label for="address">Localidad</label>
		<input type="text" name="address">
		</div>
		
		<div>
		<label for="address">Código Postal</label>
		<input type="text" name="address">
		</div>
		
		<div>
		<label for="address">País</label>
		<input type="text" name="address">
		</div>
	
		<div>
				<input type="checkbox" />
				<label>He leído y acepto las condiciones legales</label>
		</div>
		
<!-- Paypal submit -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<fieldset>
<input type="hidden" name="shipping" value="<?php
$sql	=	"SELECT * FROM panel WHERE id = '1'";
$resultado	=	mysql_query($sql);
while	($row	=	mysql_fetch_row($resultado))	{
echo	$row[7];
};
?>">
<input type="hidden" name="cbt" value="Su operación a sido exitosa">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="bn" value="Patagonia Posters">
<input type="hidden" name="business" value="info@patagoniaposters.cl">
<input type="hidden" name="item_name" value="<?php
$sql	=	"SELECT * FROM panel WHERE id = '1'";
$resultado	=	mysql_query($sql);
while	($row	=	mysql_fetch_row($resultado))	{
echo	" "	.	$row[1];
};
?>">
<input type="hidden" name="amount" value="<?php
$sql	=	"SELECT * FROM panel WHERE id = '1'";
$resultado	=	mysql_query($sql);
while	($row	=	mysql_fetch_row($resultado))	{
echo	$row[8];
};
?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="image_url" value="">
<input type="hidden" name="return" value="http://patagoniaposters.cl">
<input type="hidden" name="cancel_return" value="http://patagoniaposters.cl">
<input type="hidden" name="no_shipping" value="1">
<input type="submit" id="checkout" value="COMPRAR">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
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



