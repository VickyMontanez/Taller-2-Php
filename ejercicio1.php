<?php
    header("Content-Type: application/json; charset:UTF-8");

    /*  Este es el tipo de contenido de respuesta predeterminado. Es decir, con este header la respuesta será en formato JSON */
    $_DATA = json_decode(file_get_contents("php://input"), true);

    /* "file_get_contents": Esta función devuelve los datos leídos o false en caso de error.
    "json_decode":  Convierte un string codificado en JSON a una variable de PHP*/

    $promedio = (float) array_sum($_DATA)/count($_DATA);

    /* "array_sum": Calcular la suma de los valores de un array 
        "array_reduce": Reduce todos los valores de un amatriz de datos a uno solo (los suma)
        "count" : Cuenta todos los elementos de un array o algo de un objeto
    */

    $res = (array)[
        "mensaje" => ($promedio<=3.9) ? "Estudie": "Becado",
        "notas" => $_DATA,
        "promedio" => $promedio
    ];

    /* SINTAXIS DE UN ARRAY 
        $variable = TIPO:(array)[
        "key" => value
        "key" => value
        "key" => value
    ]; */
    
    // Generar tabla HTML
    $tableHTML = "<table border='1'>";
    $tableHTML .= "<tr><th>Notas</th></tr>";
    
    foreach ($res['notas'] as $nota) {
        $tableHTML .= "<tr><td>$nota</td></tr>";
    }
    
    $tableHTML .= "</table>";
    
    // Imprimir tabla HTML
    echo $tableHTML ."<br>";
    echo "Su promedio es $promedio" . "<br>";
    echo $res['mensaje'];

?>