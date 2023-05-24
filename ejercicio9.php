<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);

    $finalistas =$_DATA['participantes'];
    $recordsalto = $_DATA['record'];

    echo '<table border=1>
            <tr>
                <th>Participante</th>
                <th>Record Salto (m)</th>
            </tr>';
            
    foreach ($finalistas as $key => $finalista) {
        $record = $recordsalto[$key];

        echo "<tr>
                <td>$finalista</td>
                <td>$record</td>
              </tr>";
    };

    echo '</table>';

    $camp = max($recordsalto);
    $indCamp = array_search($camp, $recordsalto);
    $campName = $finalistas[$indCamp];

    echo "La campeona de la medalla de oro fue $campName con un record de $camp m"."<br>";

    if ($camp >= 15.50) {
        echo "¡Buenas noticias! ¡$campName rompió el record y GANA 500 MILLONES DE PESOS! ¡Felicidades!";
    }else{
        echo "¡Felicidades a la campeona!";
    };
?>
