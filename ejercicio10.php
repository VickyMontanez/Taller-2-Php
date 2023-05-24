<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);

    $elementos = $_DATA['nume'];
    $maximo = max($elementos);
    $minimo = min($elementos);
    $count = count($elementos);
    $sumatoria = array_sum($elementos);
    $promedio = $sumatoria/$count;

    echo json_encode($elementos)."<br>"."<br>";
    echo "La sumatoria de los valores es $sumatoria"."<br>";
    echo "El valor promedio es $promedio"."<br>";
    echo "Fueron digitados $count valores"."<br>";
    echo "El valor mayor fue $maximo"."<br>";
    echo "El valor menor fue $minimo";
?>