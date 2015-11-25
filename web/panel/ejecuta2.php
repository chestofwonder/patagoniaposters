
<?php

include_once	'../db_connection.php';

$table	=	$_GET['table'];

for	($i	=	1;	$i	<=	$_POST["num_"	.	$table	.	""];	$i++)	{

$query	=	"SELECT * FROM "	.	$table	.	" WHERE id = "	.	$_POST["id"	.	$i];
$result	=	mysql_query($query,	$con);

if	(mysql_num_rows($result)	>	0)	{

if	($_POST["eliminar"	.	$i]	==	"eliminar"	.	$i)	{

// Delete existing promo
$query	=	"DELETE FROM "	.	$table	.	" WHERE id="	.	$_POST["id"	.	$i];
$result	=	mysql_query($query,	$con);
}	else	{

// Promo already exists, so update it
$query	=	"UPDATE "	.	$table	.	" SET nombre='"	.	$_POST["nombre"	.	$i]	.	"', "
	.	"descripcion='"	.	$_POST["descripcion"	.	$i]	.	"', "
	.	"nacional='"	.	$_POST["nacional"	.	$i]	.	"', "
	.	"internacional='"	.	$_POST["internacional"	.	$i]	.	"' "
	.	"WHERE id="	.	$_POST["id"	.	$i];
$result	=	mysql_query($query,	$con);
}
}	else	if	($_POST["eliminar"	.	$i]	!==	"on")	{

// New promo, create it
$query	=	"INSERT INTO "	.	$table	.	" values("
	.	$_POST["id"	.	$i]	.	", "
	.	"'"	.	$_POST['nombre'	.	$i]	.	"', "
	.	"'"	.	$_POST['descripcion'	.	$i]	.	"', "
	.	"'"	.	$_POST['nacional'	.	$i]	.	"', "
	.	"'"	.	$_POST['internacional'	.	$i]	.	"', "
	.	"'')";
$result	=	mysql_query($query,	$con);
}
}

echo	"<div style='text-align:center;margin-top:45px;'>";
echo	"<p style='font-size:12px;font-family:verdana;margin-bottom:35px;'>Datos actualizados</p>";
echo	"<a href="	.	$_SERVER['HTTP_REFERER']	.	" style='font-size:10px;font-family:arial;text-decoration:none;color:#FFF;border:0px;padding:10px 15px;background:#F1826A none repeat scroll 0% 0%;'>Volver al panel</a>";
echo	"</div>";

