<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-6");

echo "<p>Ejercicio 6</p>";

$columnas = 15;
$filas = 5;
$j = 0;
echo "<table>";
while($j < $filas) {
    $i = 0;
    echo "<tr>";
    while($i < $columnas) {
        if($j == 0 || $i == 0 || $i == 14 || $j == 4) {
            echo "<td>1</td>";
        } else {
            echo "<td>0</td>";
        }
        $i++;
    }
    echo "</tr>";
    $j++;
}
echo "</table>";

include("../UT2-Ejercicio2B/pie_html.php");
?>