<?php
header("Content-Type: application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"), true);

$cuadrado = $_DATA['lados'];
$rectbase = $_DATA['bases'];
$rectalt = $_DATA['altura'];

$perimetro = ($cuadrado *4);
$area = ($rectbase * $rectalt);

echo "El perimetro del cuadrado es de $perimetro cm <br>";
echo "El area del rectangulo es de $area cm";
?>