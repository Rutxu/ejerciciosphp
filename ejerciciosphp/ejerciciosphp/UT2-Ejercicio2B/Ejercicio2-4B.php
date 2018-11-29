<?php
    include("cabecera_html.php");
    cabezera("Ejercicio2-4B");
    echo "<p>Ejercicio 4</p>";
    $cadena = "Vamos Al cine";
    echo "<table>
          <tr>
            <th style='background-color: yellow'>frase</th>
            <th style='background-color: yellow'>Vamos Al cine</th>
          </tr>
          <tr>
            <td>strtoupper(frase)</td>
            <td>".strtoupper($cadena)."</td>
          </tr>
          <tr>
            <td>strtolower(frase)</td>
            <td>".strtolower($cadena)."</td>
          </tr>
          <tr>
            <td>ucfirst(frase)</td>
            <td>".ucfirst($cadena)."</td>
          </tr>
          <tr>
            <td>ucwords(frase)</td>
            <td>".ucwords($cadena)."</td>
          </tr>
      </table>";
    include("pie_html.php");
?>