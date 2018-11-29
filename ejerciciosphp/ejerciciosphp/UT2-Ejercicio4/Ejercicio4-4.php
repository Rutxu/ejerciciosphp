<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-4");

echo "<p>Ejercicio 4</p>";

$numeros = array();
$suma= 0;
$n = 5;

for ($i = 0; $i <= 15; $i++) {
    $num_aleatorio = rand(1,400);
    $numeros[$i] = $num_aleatorio;

    if($i<$n){
        $suma = $suma + $numeros[$i];
    }

}

print_r($numeros);
echo "<p>La suma de los $n primeros numeros es igual a $suma</p>";

include("../UT2-Ejercicio2B/pie_html.php");
?>