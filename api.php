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

    echo json_encode($res, JSON_PRETTY_PRINT);

    /*"json_encode":Retorna la representación JSON del valor dado*/

/*     header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    function suma($acun, $number):mixed{
        $acun += $number;
        return $acun;
    }
    $promedio = (float) array_reduce($_DATA, "suma")/count($_DATA);
    echo json_encode(["promedio"=> ($promedio<=3.9) ? "Estudie" : "becado"],JSON_PRETTY_PRINT); */

/*     header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    function suma($acun, $number):mixed{
        $acun += $number;
        return $acun;
    }
    $promedio = (float) array_reduce($_DATA, "suma")/count($_DATA);
    $res = (array) [
        "mensaje"=> ($promedio<=3.9) ? "Estudie" : "becado",
        "notas"=> $_DATA,
        "promedio"=> $promedio
    ];
    echo json_encode($res,JSON_PRETTY_PRINT); */

    /*  header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $METHOD = $_SERVER["REQUEST_METHOD"];
    switch ($METHOD) {
        case 'POST':
            function suma($acum,$number){
                if(is_string($number)){
                    $acum = 0;
                }else{
                    $acum+=$number;
                }
                return $acum;
            }
            $res = array_reduce($_DATA, "suma");
            echo $res;
            // $promedio = (float) array_reduce($_DATA, "suma")/count($_DATA);
            // $res = (array) [
            //     "mensaje"=> ($promedio<=3.9) ? "Estudie" : "becado",
            //     "notas"=> $_DATA,
            //     "promedio"=> $promedio
            // ];
            // echo json_encode($res,JSON_PRETTY_PRINT);
            break;
        
        default:
           
            break;
    } */
?>