
<!DOCTYPE html>
<html lang="es">
<head>
<title>Formulario de consulta</title>
 <link rel="stylesheet" href="estilof.css" type="text/css" media="all">
</head>
<body>
		
<?php
// Database initialization. Create $conn var and selects "tagoni81_datos" database
if	(file_exists('../db_connection.php'))	{
include_once	'../db_connection.php';
}
?>
		
<div class="logo"> <img src="logo1.png"></div>
<h2>Patagonia Posters :: arte impreso</h2>
<h3>www.patagoniaposters.cl</h3>

<div class="group">
<form action="order_request.php" method="POST">
<br>
<label for="nombre">Nombre / name <span>(requerido)</span></label>
<input type="text" name="nombre" class="form-input" required/>
<label for="mail">Email<span>(requerido)</span></label>
<input type="email" name="mail" class="form-input" />
<label for="consulta">Consulta / Request </label>
<textarea name="consulta" class="form-inputa"> </textarea>

<?php
$productos = "";

foreach($_COOKIE as $cookie_name => $cookie_value){

if( strpos($cookie_name,'www_patagoniaposters_cl:add_poster_') !== false){
if($cookie_value > 0){
$poster_id = substr($cookie_name,	$cookie_name.lenght - 1,	1);
mysql_query("set names 'utf8'");
$sql	=	"SELECT * FROM panel WHERE id = '" . $poster_id . "'";
$resultado	=	mysql_query($sql);
$row	=	mysql_fetch_array($resultado, MYSQL_ASSOC);

$productos .= "Poster: " . $row['poster'] . "  Cantidad: " . $cookie_value . "\n";

}
}

}

?>	

<input type="hidden" name="productos" value="<?php echo $productos ?>">

<input class="form-btn" name="submit" type="submit" value="Enviar" /> 
</form>
 </div>
 
</body>
</html>

