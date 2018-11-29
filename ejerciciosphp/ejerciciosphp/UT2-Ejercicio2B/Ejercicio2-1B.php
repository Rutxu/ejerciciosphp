<?php
include("cabecera_html.php");
cabezera("Ejercicio2-1B");
// Ejercicio 1
echo "<p>Ejercicio 1</p>";
$cadena = "bienvenidos";
$long = strlen($cadena);
echo "<table>
          <tr>
            <th>Caracter</th>
            <th>Posicion</th>
          </tr>";
for($i=0;$i<$long;$i++) {
    echo "<tr>
              <td>".substr($cadena, $i, 1)."</td>
              <td>".$i."</td>
          </tr>";
}
echo "</table>";
include ("pie_html.php");
?>