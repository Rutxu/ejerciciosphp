<?php
include("cabecera_html.php");
cabezera("Ejercicio2-6B");
echo "<p>Ejercicio 6</p>";
$matriz1 = ["cougar", "ford", "2.500", "v6", 172, 5 => null];
$matriz2 = ["cougar", "ford", 2 => null, "2.500", "v6", "172"];
echo "<table>
          <tr>
            <th style='background-color: yellow'>índice</th>
            <td style='background-color: yellow'>0</td>
            <td style='background-color: yellow'>1</td>
            <td style='background-color: yellow'>2</td>
            <td style='background-color: yellow'>3</td>
            <td style='background-color: yellow'>4</td>
            <td style='background-color: yellow'>5</td>
          </tr>
          <tr>
            <th>matriz1</th>
            <td>".$matriz1[0]."</td>
            <td>".$matriz1[1]."</td>
            <td>".$matriz1[2]."</td>
            <td>".$matriz1[3]."</td>
            <td>".$matriz1[4]."</td>
            <td>".$matriz1[5]."</td>
          </tr>
          <tr>
            <th>matriz2</th>
            <td>".$matriz2[0]."</td>
            <td>".$matriz2[1]."</td>
            <td>".$matriz2[2]."</td>
            <td>".$matriz2[3]."</td>
            <td>".$matriz2[4]."</td>
            <td>".$matriz2[5]."</td>
          </tr>
      </table>";
include("pie_html.php");
?>