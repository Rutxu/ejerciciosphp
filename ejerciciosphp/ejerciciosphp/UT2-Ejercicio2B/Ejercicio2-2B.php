<?php
include("cabecera_html.php");
cabezera("Ejercicio2-2B");
echo "<p>Ejercicio 2</p>";
$cadena = "bienvenidos";
echo "<table>
          <tr>
            <th>Carácter</th>
            <th>Frecuencia</th>
          </tr>";
foreach(count_chars($cadena, 1) as $i => $val) {
    echo "<tr>
              <td>".chr($i)."</td>
              <td>".$val."</td>
          </tr>";
}
echo "</table>";
include ("pie_html.php");
?>