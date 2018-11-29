<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-7");

$num = array(1,2,3,4,5,6,7,8,9,10);
$cont = 0;$suma=0;

foreach ($num as $n) {

    if($n%2==0){
        $cont = $cont + 1;
        $suma = $suma + $n;
    }

    else{
        echo"<p>Numeros impares: ".$n."</p>";
    }
}

$media = $suma/$cont;
echo "<p> La media de los pares de los 10 primeros números es: ".$media."</p>";

include("../UT2-Ejercicio2B/pie_html.php");
?>