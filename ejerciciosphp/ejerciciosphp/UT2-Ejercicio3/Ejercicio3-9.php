<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-9");

$array1 = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$array2 = array(12, 34, 45, 52, 12);
$array3 = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34 );

$arrayf = array_merge($array1,$array2,$array3);

arsort($arrayf);
print_r($arrayf);

include("../UT2-Ejercicio2B/pie_html.php");
?>