<?php
header("Content-Type: application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"), true);

/* Busco el número mayor del arreglo de edades */
$mayore = max($_DATA['edades']);
/* Busco el indice de del número mayor, en el arreglo de las edades */
$mayorn = array_search($mayore, $_DATA['edades']);
/* Busco el indice del número mayor (MISMO INDICE DEL NOMBRE) en el arreglo de los nombres */
$nombre = $_DATA['nombres'][$mayorn];

echo "El mayor en este grupo es $nombre con $mayore años";
?>