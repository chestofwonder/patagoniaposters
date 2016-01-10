<?php


// Vars for product weight (in grs.)
$poster_weight = 150;
$collection_weight = 350;

$total_weight = ($poster_weight * $_POST["total_posters"]) + ($collection_weight * $_POST["total_collections"]);
$sending_cost = 0;

if( $total_weight > 1000 ){

$sending_cost = "Por favor, para hacer tu pedido envíame una consulta <a href='form/request_form.php' target='_self'>aquí</a>";

}elseif ($total_weight < 1000 && $total_weight >= 500){

switch($_POST["sending_zone"]){
case "América 1":
$sending_cost = 12000;
break;
case "América 2":
$sending_cost = 16;
break;
case "Europa":
$sending_cost = 19;
break;
case "Asia":
$sending_cost = 23;
break;
case "África/Oceanía":
$sending_cost = 20;
break;
}

}elseif ($total_weight < 500 && $total_weight >= 250){

switch($_POST["sending_zone"]){
case "América 1":
$sending_cost = 7000;
break;
case "América 2":
$sending_cost = "9,5";
break;
case "Europa":
$sending_cost = 12;
break;
case "Asia":
$sending_cost = 13;
break;
case "África/Oceanía":
$sending_cost = "12,5";
break;
}

}elseif ($total_weight < 250 && $total_weight >= 0){

switch($_POST["sending_zone"]){
case "América 1":
$sending_cost = 5500;
break;
case "América 2":
$sending_cost = "7,5";
break;
case "Europa":
$sending_cost = 9;
break;
case "Asia":
$sending_cost = 10;
break;
case "África/Oceanía":
$sending_cost = "9,5";
break;
}

}

echo $sending_cost;

/* Generar envases: decir el número de tubos y de carpetas de colecciones que se enviaran

/*
0-250g
America 1 5500 8
America 2 5000 7,5
Europa 6000 9 
Asia 7000 10 
Africa/Oceania 6500 9,5
 
250-500g
America 1 7000 10
America 2 6500 9,5
Europa 8000 12
Asia 9000 13
Africa/Oceania 8500 12,5

500-1000g
America 1 12000 17,5
America 2 11000 16
Europa 13500 19
Asia 16000 23
Africa/Oceania 14000 20

De los precios que te había enviado antes en una tablita,  más esta tabla de tramo deduzco que: 
1 tubo con 1 o 2 posters caen en el 1er tramo.
1 tubo con 3 posters caen en el 2do tramo.
2 tubos el segundo lleno con 1, 2 o 3 ya es 3er tramo.
1 colección ya pesa 300 gr, o sea va directo al 2do tramo.
2 colecciones 3er tramo
3 colecciones se pasan de 1 kilo, ya lo comprobé, no puede ser enviado en esta modalidad (es por los gramos extra del embalaje)
1 colección más 1 tubo con hasta 3 posters va directo al tramo 3

otras combinaciones deberían enviar al cliente a una opción de consulta directa a mi, 
para hacer los cálculos reales, o bien tiene que separar el pedido en 2 envíos diferentes. 
Ya que el PEQUEÑO PAQUETE INTERNACIONAL CERTIFICADO es HASTA 1 Kilo
*/

