<?php

include_once	'../db_connection.php';

// Tramo 1
$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo1_america_ch"]	.	"' WHERE id_tramo = 1 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo1_europa_ch"]	.	"' WHERE id_tramo = 1 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo1_asia_ch"]	.	"' WHERE id_tramo = 1 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo1_africaoceania_ch"]	.	"' WHERE id_tramo = 1 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);

$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo1_america_usd"]	.	"' WHERE id_tramo = 1 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo1_europa_usd"]	.	"' WHERE id_tramo = 1 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo1_asia_usd"]	.	"' WHERE id_tramo = 1 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo1_africaoceania_usd"]	.	"' WHERE id_tramo = 1 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);

// Tramo 2
$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo2_america_ch"]	.	"' WHERE id_tramo = 2 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo2_europa_ch"]	.	"' WHERE id_tramo = 2 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo2_asia_ch"]	.	"' WHERE id_tramo = 2 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo2_africaoceania_ch"]	.	"' WHERE id_tramo = 2 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);

$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo2_america_usd"]	.	"' WHERE id_tramo = 2 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo2_europa_usd"]	.	"' WHERE id_tramo = 2 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo2_asia_usd"]	.	"' WHERE id_tramo = 2 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo2_africaoceania_usd"]	.	"' WHERE id_tramo = 2 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);

// Tramo 3
$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo3_america_ch"]	.	"' WHERE id_tramo = 3 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo3_europa_ch"]	.	"' WHERE id_tramo = 3 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo3_asia_ch"]	.	"' WHERE id_tramo = 3 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo3_africaoceania_ch"]	.	"' WHERE id_tramo = 3 AND currency = 'ch'"; $result	=	mysql_query($query,	$con);

$query	=	"UPDATE tramos SET america ='"	.	$_POST["tramo3_america_usd"]	.	"' WHERE id_tramo = 3 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET europa ='"	.	$_POST["tramo3_europa_usd"]	.	"' WHERE id_tramo = 3 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET asia ='"	.	$_POST["tramo3_asia_usd"]	.	"' WHERE id_tramo = 3 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);
$query	=	"UPDATE tramos SET africa_oceania ='"	.	$_POST["tramo3_africaoceania_usd"]	.	"' WHERE id_tramo = 3 AND currency = 'usd'"; $result	=	mysql_query($query,	$con);

echo	"<div style='text-align:center;margin-top:45px;'>";
echo	"<p style='font-size:12px;font-family:verdana;margin-bottom:35px;'>Datos actualizados</p>";
echo	"<a href="	.	$_SERVER['HTTP_REFERER']	.	" style='font-size:10px;font-family:arial;text-decoration:none;color:#FFF;border:0px;padding:10px 15px;background:#F1826A none repeat scroll 0% 0%;'>Volver al panel</a>";
echo	"</div>";

