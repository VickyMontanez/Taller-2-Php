<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);

    // Así se accedea los datos de un Objeto;
    $nombres = $_DATA['nombres'];
    $notas = $_DATA['notas'];
    $sexos = $_DATA['sexos'];

    // Crear la estructura de la tabla
    echo '<table border=1>
            <tr>
                <th>Nombre</th>
                <th>Nota Def</th>
                <th>Sexo</th>
            </tr>';

    // Se recorrer los arrays para acceder a los elementos de cada array y se generan las filas en la tabla por cada iteración
    foreach ($nombres as $key => $nombre) {
        $nota = $notas[$key];
        $sexo = $sexos[$key];

        echo "<tr>
                <td>$nombre</td>
                <td>$nota</td>
                <td>$sexo</td>
              </tr>";
    }

    // Cerrar la tabla
    echo '</table>'.'<br>';
    //PUNTOS SIGUIENTES--------------------------
    
    $mayornt = max($notas);
    $indicemayor = array_search($mayornt, $_DATA['notas']);
    $mayorname = $nombres[$indicemayor];
    echo "El estudiante con la mejor nota fue $mayorname con un puntaje de $mayornt"."<br>";

    $menornt = min($notas);
    $indicemenor = array_search($menornt, $_DATA['notas']);
    $menorname = $nombres[$indicemenor];
    echo "El estudiante con la menor nota fue $menorname con un puntaje de $menornt";

    $contadorFemenino = 0;
    $contadorMasculino = 0;

    //Se itera la variable SEXOS como el parametro SEXO y al encontrar si es masculino o femenino incrementa la variable contador;
    foreach ($sexos as $sexo) {
        if ($sexo === "Masculino") {
            $contadorMasculino++;
        } elseif ($sexo === "Femenino") {
            $contadorFemenino++;
        }
    };

    echo '<br>'."Cantidad de estudiantes masculinos: ".$contadorMasculino . "<br>";
    echo "Cantidad de estudiantes femeninos: " . $contadorFemenino;
?>
