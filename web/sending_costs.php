<?php

include_once 'db_connection.php';

// Vars for product weight (in grs.)
$query = "SELECT * FROM pesos WHERE producto = 'poster'";
$result = mysql_query($query, $con);
$row = mysql_fetch_assoc($result);
$poster_weight = intval($row['peso']); //150

$query = "SELECT * FROM pesos WHERE producto = 'coleccion'";
$result = mysql_query($query, $con);
$row = mysql_fetch_assoc($result);
$collection_weight = intval($row['peso']); //510;

$total_weight = ($poster_weight * $_POST["total_posters"]) + ($collection_weight * $_POST["total_collections"]);
$sending_cost = 0;
$id_tramo = 0;

if( $total_weight > 1000 ){

$sending_cost = "Por favor, para hacer tu pedido envíame una consulta <a href='form/request_form.php' target='_self'>aquí</a>";

}elseif ($total_weight < 1000 && $total_weight >= 500){

$id_tramo = 3;

}elseif ($total_weight < 500 && $total_weight >= 250){

$id_tramo = 2;

}elseif ($total_weight < 250 && $total_weight >= 0){

$id_tramo = 1;

}

$query = "SELECT * FROM tramos where id_tramo = " . $id_tramo . " and currency = 'usd'";
$result = mysql_query($query, $con);

$row = mysql_fetch_assoc($result);

echo $row[$_POST["sending_zone"]];


