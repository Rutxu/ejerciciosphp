<?php
include ("cabecera_html.php");
cabezera("Ejercicio2-3B");
echo "<p>Ejercicio 3</p>";
$cad1 = "Atención";
$cad2 = "atención";
echo "<table>
          <tr>
            <td>cadena1</td>
            <td>Atención</td>
          </tr>
          <tr>
            <td>cadena2</td>
            <td>atención</td>
          </tr>
          <tr>
            <td>strmp(cadena1, cadena2)</td>
            <td>".strcmp($cad1, $cad2)."</td>
          </tr>
          <tr>
            <td>strcasecmp(cadena1, cadena2)</td>
            <td>".strcasecmp($cad1, $cad2)."</td>
          </tr>
      </table>";

include ("pie_html.php");
?>