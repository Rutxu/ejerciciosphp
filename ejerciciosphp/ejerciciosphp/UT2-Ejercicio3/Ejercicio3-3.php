<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-3");

$array = array("Pedro", "Ana", 43, 1);
echo"<p>Imprimir con var_dump</p>\n";
var_dump($array);
echo "<br>";
echo"<p>Imprimir con print_r</p>\n";
print_r($array);

include("../UT2-Ejercicio2B/pie_html.php");
?>
