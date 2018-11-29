<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-5");

$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");


foreach ($ciudades as $i =>$ciud) {
    print "La ciudad con el índice ".$i . " tiene de nombre " .$ciud. "<br />";
}

include("../UT2-Ejercicio2B/pie_html.php");
?>