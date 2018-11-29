<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-4");

$array = array("Nombre"=>"Pedro Torres","Direccion"=>"C/Mayor 37","Telefono"=>"123456789");

echo "<p>Nombre: ".$array['Nombre']." Direccion: ".$array['Direccion']."</p>\n
      <p>Telefono:".$array['Telefono']."</p>";

include("../UT2-Ejercicio2B/pie_html.php");
?>