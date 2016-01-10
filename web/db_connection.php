<?php

//pro 
//$con = mysql_connect("localhost", "tagoni81_usuario", "Usuario1234");
//
//pre
//$con = mysql_connect("mysql.webcindario.com", "patagoniaposters", "aKRBGpEhG3rSvNHD");
$con = mysql_connect("localhost", "root", "root");

if (! $con){die ("ERROR EN LA CONEXION CON MYSQL: ".mysql_error());}

//pre
//$base = mysql_select_db("patagoniaposters", $con);
$base = mysql_select_db("tagoni81_datos", $con);

if(! $base){die ("ERROR AL CONECTAR CON LA BASE DE DATOS: ".mysql_error());}
?>
