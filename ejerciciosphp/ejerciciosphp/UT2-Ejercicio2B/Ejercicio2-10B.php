<?php
include("cabecera_html.php");
cabezera("Ejercicio2-10B");
echo "<p>Ejercicio 10</p>";
$m = array("cafe", "harina", "carne", "vegetales", "zumo", "pasta");

// a
echo "Parte a)<br>";
var_dump($m);
echo "<br>";

// b
echo "Parte b)<br>";
asort($m);
var_dump($m);
echo "<br>";

// c
echo "Parte c)<br>";
arsort($m);
var_dump($m);
echo "<br>";

// d
echo "Parte d)<br>";
print_r(array_keys($m));
echo "<br>";

// e
echo "Parte e)<br>";
print_r(current($m));
echo "<br>";

// f
next($m);
next($m);

// g
echo "Parte g)<br>";
print_r(key($m));
echo "<br>";
include("pie_html.php");
?>