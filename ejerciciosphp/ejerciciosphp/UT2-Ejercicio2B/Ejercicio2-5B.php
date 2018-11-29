<?php
include("cabecera_html.php");
cabezera("Ejercicio2-1B");
echo "<p>Ejercicio 5</p>";
$cadena = "El libro cubre las técnicas basadas en el lenguaje PHP";
echo "<table>
          <tr>
            <th style='background-color: yellow'>cadena</th>
            <td>El libro cubre las técnicas basadas en el lenguaje PHP</td>
          </tr>
          <tr>
            <th style='background-color: yellow'>substr_count(cadena, 'a')</th>
            <td>".substr_count($cadena, 'a')."</td>
          </tr>
      </table>";

include("pie_html.php");
?>