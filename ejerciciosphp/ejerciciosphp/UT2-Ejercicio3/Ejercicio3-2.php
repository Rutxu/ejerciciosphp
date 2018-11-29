<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-2");

echo"<p>Ejercicio 3</p>";

$v = array();
    $v[1] = 90;
    $v[30] = 7;
    $v['e'] = 99;
    $v['hola'] = 43;

    foreach($v as $i => $datos) {
        echo "[$i]: $datos\n";
    }
include("../UT2-Ejercicio2B/pie_html.php");
?>