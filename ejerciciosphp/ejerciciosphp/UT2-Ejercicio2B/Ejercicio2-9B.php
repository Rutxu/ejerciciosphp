<?php
include("cabecera_html.php");
cabezera("Ejercicio2-9B");
echo "<p>Ejercicio 9</p>";
$matriz1 = array("cougar", "ford", null, "2.500", "V6", 172);

// a)
unset($matriz1[3]);

// b)
echo "Parte b)<br>";
var_dump($matriz1);
echo "<br>";

// c
foreach($matriz1 as $i => $val) {
    unset($matriz1[$i]);
}

// d
echo "Parte d)<br>";
$matriz1[] = "seat";
$matriz1[] = "mercedes";
var_dump($matriz1);
echo "<br>";
echo "Los ha añadido en las posiciones siguientes a pesar de haber sido eliminados los datos del array (6 y 7)";
echo "<br>";

// e
echo "Parte e)<br>";
$matriz1 = array_values($matriz1);
print_r($matriz1);
echo "<br>";
include("pie_html.php");
?>