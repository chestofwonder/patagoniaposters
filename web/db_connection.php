<?php

$con = mysql_connect("localhost", "tagoni81_usuario", "Usuario1234");

if (! $con){die ("ERROR EN LA CONEXION CON MYSQL: ".mysql_error());}

$base = mysql_select_db("tagoni81_datos", $con);
if(! $base){die ("ERROR AL CONECTAR CON LA BASE DE DATOS: ".mysql_error());}
?>
