<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
echo"<meta http-equiv='refresh' content='5' />";
echo"<link rel='stylesheet' type='text/css' href='estilo.css' media='screen'/>";
cabezera("Ejercicio4-8");

echo "<p>Ejercicio 8</p>";


$imagenes = array('Frutas/fresa.jpg','Frutas/grosella.jpg','Frutas/guayaba.jpg','Frutas/kiwi.jpg','Frutas/manzana.jpg',
    'Frutas/melocoton.jpg','Frutas/naranja.jpg','Frutas/pera.jpg'
);


shuffle($imagenes);

echo"<h2>Refresca Frutas cada 5 Segundos</h2>";
echo "<table>
        <tr>";
        for ($i = 0; $i < 4; $i++) {
            echo"<td><img src=\"$imagenes[$i]\" /></td>";
        }
        echo "</tr>";
        echo "</tr>";
        for ($i = 4; $i < 8; $i++) {
            echo"<td><img src=\"$imagenes[$i]\" /></td>";
        }

          
echo "</table>";

include("../UT2-Ejercicio2B/pie_html.php");
?>