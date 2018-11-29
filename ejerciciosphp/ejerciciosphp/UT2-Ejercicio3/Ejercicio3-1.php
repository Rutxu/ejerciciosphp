<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-1");

echo "<p>Ejercicio 1</p>";

$num = array();

for($i=0;$i<=10;$i++){
    if($i%2==0){
        $num[] = $i;
    }
}
print_r($num);
include("../UT2-Ejercicio2B/pie_html.php");
?>