
<?php

include_once	'../db_connection.php';

$table	=	$_GET['table'];

for	($i	=	1;	$i	<=	$_POST["num_promos"];	$i++)	{

if	($_POST["eliminar"	.	$i]	==	"eliminar"	.	$i)	{
// Delete
mysql_query("set names 'utf8'");
$query	=	"DELETE FROM "	.	$table	.	" WHERE id="	.	$_POST["id"	.	$i];

$result	=	mysql_query($query,	$con);
}else{
mysql_query("set names 'utf8'");
$query	=	"SELECT * FROM "	.	$table	.	" WHERE id = "	.	$_POST["id"	.	$i];
$result	=	mysql_query($query,	$con);

if	(mysql_num_rows($result)	>	0)	{
// Update
mysql_query("set names 'utf8'");
$query	=	"UPDATE "	.	$table	.	" SET nombre='"	.	$_POST["nombre"	.	$i]	.	"', "
	.	"descripcion='"	.	$_POST["descripcion"	.	$i]	.	"', "
	.	"nacional='"	.	$_POST["nacional"	.	$i]	.	"', "
	.	"internacional='"	.	$_POST["internacional"	.	$i]	.	"' "
	.	"WHERE id="	.	$_POST["id"	.	$i];

$result	=	mysql_query($query,	$con);
}else{
// Insert
mysql_query("set names 'utf8'");
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
}// End for

echo	"<div style='text-align:center;margin-top:45px;'>";
echo	"<p style='font-size:12px;font-family:verdana;margin-bottom:35px;'>Datos actualizados</p>";
echo	"<a href="	.	$_SERVER['HTTP_REFERER']	.	" style='font-size:10px;font-family:arial;text-decoration:none;color:#FFF;border:0px;padding:10px 15px;background:#F1826A none repeat scroll 0% 0%;'>Volver al panel</a>";
echo	"</div>";

