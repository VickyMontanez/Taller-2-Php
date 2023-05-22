<?php
header("Content-Type: application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"), true);

$a = $_DATA['numero1'];
$b = $_DATA['numero2'];

if($a > $b){
    echo "Los números son $a y $b"."<br>";
    echo "El número mayor es $a"."<br>";
    echo "La suma de los dos números es ". ($a + $b)."<br>";
    echo "La diferencia entre los números es ". ($a - $b)."<br>";
} else{
    echo "Los números son $a y $b"."<br>";
    echo "El número mayor es $b"."<br>";
    echo "El producto de los dos números es ". ($a * $b)."<br>";
    echo "La división entre los números es ". ($a / $b)."<br>";
};
?>