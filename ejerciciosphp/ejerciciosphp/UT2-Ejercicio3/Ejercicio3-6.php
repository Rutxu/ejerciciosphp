<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-6");

$ciudades = array("MD"=>"Madrid", "BCN"=>"Barcelona", "LON"=>"Londres", "NY"=>"New York", "LA"=>"Los Angeles", "CHI"=>"Chicago");


foreach ($ciudades as $i =>$ciud) {
    print "El índice del array que contiene como valor ".$ciud . " es " .$i. "<br />";
}

include("../UT2-Ejercicio2B/pie_html.php");
?>