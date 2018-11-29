<?php
include("cabecera_html.php");
cabezera("Ejercicio2-8B");
echo "<p>Ejercicio 8</p>";
$matriz1 = array("cougar", "ford", null, "2.500", "V6", 172);
$matriz2 = array(2 => "cougar", "ford", 1 => null, 0 => "2.500", "V6", 172);

// matriz1
echo "Parte a) - for:\n";
for($i=0;$i<count($matriz1);$i++) {
    echo "$matriz1[$i]\n";
}
echo "<br>";
echo "Parte a) - foreach:\n";
foreach($matriz1 as $i => $val) {
    echo "[$i]: $val\n";
}
echo "<br>";

// matriz2
echo "Parte b) - for:\n";
for($i=0;$i<count($matriz2);$i++) {
    echo "$matriz2[$i]\n";
}
echo "<br>";
echo "Parte b) - foreach:\n";
foreach($matriz2 as $i => $val) {
    echo "[$i]: $val\n";
}
echo "<br>";

// utilizando var_dump
echo "var_dump de matriz1";
echo "<br>";
var_dump($matriz1);
echo "<br>";

echo "var_dump de matriz2";
echo "<br>";
var_dump($matriz1);
echo "<br>";
include("pie_html.php");
?>