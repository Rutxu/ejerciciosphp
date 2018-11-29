<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-5");

echo "<p>Ejercicio 5</p>";

$columnas = 5;
$filas = 5;
$j = 0;
$valor_i = 0;
echo "<table>";
while($j < $filas) {
    $i = 0;
    echo "<tr>";
    while($i < $columnas) {
        if($i == $valor_i) {
            echo "<td>1</td>";
        } else {
            echo "<td>0</td>";
        }
        $i++;
    }
    echo "</tr>";
    $valor_i++;
    $j++;
}
echo "</table>";



include("../UT2-Ejercicio2B/pie_html.php");
?>