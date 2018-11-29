<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio3-10");

echo"<p>Ejercicio 10</p>";

$estadios_futbol = array("Barcelona"=>"Camp Nou", "Real Madrid"=>"Santiago Bernabeu",
                         "Valencia"=>"Mestalla", "Real Sociedad"=>"Anoeta");

echo "<table>
          <tr>
            <th>Equipo</th>
            <th>Estadio</th>
          </tr>";
foreach ($estadios_futbol as $i =>$est) {
    echo "<tr>
              <td>".$i."</td>
              <td>".$est."</td>
          </tr>";
}
echo "</table>
      <br>";

unset($estadios_futbol["Real Madrid"]);

echo"<ol>\n";
    foreach ($estadios_futbol as $i =>$est) {
        echo"<li>Equipo :" .$i. " Estadio: ".$est. "</p>\n";
    }
include("../UT2-Ejercicio2B/pie_html.php");
?>