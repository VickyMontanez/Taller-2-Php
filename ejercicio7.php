<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);

    $articulos = $_DATA['articulo'];
    $cantidades = $_DATA['cantidad'];
    $precios = $_DATA['precio'];

    echo '<table border=1>
            <tr>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio $$$</th>
            </tr>';

    $total = 0;

    foreach ($articulos as $key => $articulo) {
        $cantidad = $cantidades[$key];
        $precio = $precios[$key];

        $artPrecio = ($cantidad*$precio);
        $total += $artPrecio;

        echo "<tr>
                <td>$articulo</td>
                <td>$cantidad</td>
                <td>$artPrecio</td>
              </tr>";
    };

    echo '</table>'.'<br>';
    echo "Su total a pagar es : " . $total;
?>