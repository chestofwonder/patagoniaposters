<?php $lang = $_COOKIE['lang']; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	 <?php if( $lang == "es"){
		  echo '<title>Formulario de consulta</title>';
	  }else{
		  echo '<title>Request form</title>';
	  } ?>
	<link rel="stylesheet" href="estilof.css" type="text/css" media="all">
	<script src="../js/jquery.js"></script>
	<script src="../js/custom/shopping.js"></script>
	<script src="../js/swtch/jquery.cookie.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/shopping.css" />
	
	
	<!-- Bootstrap core CSS -->
 <link href="../css/bootstrap.css" rel="stylesheet"> 
<link href="../css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
 <link href="../css/style_default.css" rel="stylesheet" >
<!-- <link href="../css/color.css" rel="stylesheet"	id="clrswitch"> -->

<!--<link href="../css/color_bg_white.css" rel="stylesheet" id="clrswitch_bg">-->
<!--<link href="../css/style-switcher.css" rel="stylesheet">-->
  </head>
  <body>

	<?php
// Database initialization. Create $conn var and selects "tagoni81_datos" database
	if ( file_exists( '../db_connection.php' ) ) {
	  include_once '../db_connection.php';
	}
	?>

	<div class="logo"> <img src="logo1.png"></div>
	<?php if( $lang == "es"){
		  echo '<h2>Patagonia Posters :: arte impreso</h2>';
	  }else{
		  echo '<h2>Patagonia Posters :: fine art prints</h2>';
	  } ?>

	<h3>www.patagoniaposters.cl</h3>

	<div class="group">
	  <form action="../shopping_step3.php" method="POST" onsubmit="return validateShopping()">
		<br>
		<input type="hidden" name="ref" value="request" />
		<?php if( $lang == "es"){
		  echo '<label for="nombre">Nombre<span>(requerido)</span></label>';
	  }else{
		  echo '<label for="nombre">Name<span>(required)</span></label>';
	  } ?>
		<input type="text" name="nombre" class="form-input" required/>
		<?php if( $lang == "es"){
		  echo '<label for="mail">Email<span>(requerido)</span></label>';
	  }else{
		  echo '<label for="mail">Email<span>(required)</span></label>';
	  } ?>
		<input type="email" name="mail" class="form-input" />
		<?php if( $lang == "es"){
		  echo '<label for="consulta">Consulta</label>';
	  }else{
		  echo '<label for="consulta">Request</label>';
	  } ?>
		<textarea name="consulta" class="form-inputa"> </textarea>

		<?php
		$productos = "";

		foreach ( $_COOKIE as $cookie_name => $cookie_value ) {

		  if ( strpos( $cookie_name, 'www_patagoniaposters_cl:add_poster_' ) !== false ) {
			if ( $cookie_value > 0 ) {
			  $poster_id	 = substr( $cookie_name, $cookie_name . lenght - 1, 1 );
			  mysql_query( "set names 'utf8'" );
			  $sql		 = "SELECT * FROM panel WHERE id = '" . $poster_id . "'";
			  $resultado	 = mysql_query( $sql );
			  $row		 = mysql_fetch_array( $resultado, MYSQL_ASSOC );

			  $productos .= "Poster: " . $row[ 'poster' ] . "  Cantidad: " . $cookie_value . "\n";
			}
		  }
		}
		?>	

		<input type="hidden" name="productos" value="<?php echo $productos ?>">

		<div id="warning_message_check">
		  <?php if( $lang == "es"){
		  echo '<label style="color:red;">Tienes que aceptar las condiciones de envío para poder hacer el pedido</label>';
	  }else{
		  echo '<label style="color:red;">You have to accept the conditions of shipping to ordering</label>';
	  } ?>
		</div>
		
		<div>
		  <input class="required_data_checkbox" type="checkbox" />

		  <?php if( $lang == "es" ){
		echo '<label>He leído y acepto las <a data-toggle="modal" data-target="#myModal" href="#" target="_self">condiciones de envío</a></label>';
	      }else{
	        echo '<label>I have read and accept the <a data-toggle="modal" data-target="#myModal" href="#" target="_self">terms of delivery</a></label>';
   	      }
	     ?>
		</div>

		 <?php if( $lang == "es"){
		  echo '<input class="form-btn" name="submit" type="submit" value="Enviar" />';
	  }else{
		  echo '<input class="form-btn" name="submit" type="submit" value="Send" />';
	  } ?>
	
	  </form>
	</div>

	<!-- Modal -->
<div class="_modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h1 class="modal-title" id="myModalLabel">
		    <?php 
 if($lang == 'es'){
   echo 'RENUNCIA DE RESPONSABILIDAD';
 }else{
   echo 'SHIPMENT DISCLAIMER';
 }
?>
		</h1>
      </div>
      <div class="modal-body">
     <?php 
	  if($lang == 'es'){
   $myfile = fopen('../panel/legal_conditions_es.txt', "r") or die("Se ha producido un error al abrir el archivo de condiciones legales!");
 }else{
    $myfile = fopen('../panel/legal_conditions_en.txt', "r") or die("There was an error opening the legal conditions file!");
 }
		 
		  while(($line = fgets($myfile)) !== false){
			echo $line . '<br/>';
		  }
		  fclose($myfile);
	  ?>
		<br/>
		<br/>
		<br/>

      </div>
      <div class="modal-footer">
        <button type="button" style="background-color:orange;" class="btn btn-default" data-dismiss="modal"><?php echo $lang == "es" ? "Lo he leído y acepto" : "I have read and accept"; ?></button>
      </div>
    </div>
  </div>
</div>
	
	<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-modal.js"></script>
<script src="../js/bootstrap-modalmanager.js"></script>

  </body>
</html>

