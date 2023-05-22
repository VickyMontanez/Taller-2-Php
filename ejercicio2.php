<?php
header("Content-Type: application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"));
$num = $_DATA->number;

/* Función PAR o IMPAR */
function esPar($data) {
    if ($data % 2 === 0) {
        echo "El número $data es par.";
    } else {
        echo "El número $data es impar.";
    }
};

/* Función > 0 < 10 */
function comp($data){
    if($data > 10){
        echo "<br>"."También, el número $data es mayor que 10";
    }else{
        echo "<br>"."También, el número $data es menor que 10";
    };
};

esPar($num);
comp($num);

?>