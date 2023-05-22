<?php
header("Content-Type: application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"),true);

$result = 1;

foreach($_DATA as $nums){
    $result *= $nums;
};

echo "El voltaje de tu circuito es de $result V (voltios)";