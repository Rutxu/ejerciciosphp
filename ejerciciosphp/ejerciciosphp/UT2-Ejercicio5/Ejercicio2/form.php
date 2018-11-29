<?php

$n = $_POST["n"];
$col = $_POST["col"];

echo '<html>
        <head>
            <title>Ejercicio 2 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Tabla numerada - Formulario</h3>';

        $n = $_POST["n"]; //numeros a imprimir
        $col = $_POST["col"]; //numero de columnas

        $j = 1; //Variable para imprimir los numeros hasta que j<n
        $i = 0;

        if(is_numeric($n)){
             if($col <= 10) {
                echo '<table>
                    <tr>';

                    for($i==0;$i<$col;$i++) {
                    if($j <= $n) {
                        echo '<td>'.$j.'</td>';
                    } else {
                        echo '<td>-</td>';
                    }
                    $j++;
                }
          echo '</tr>
              </table>
              <p><a href = "formulario.html">Volver al principio</a></p>
              </div>';
    } else {
        echo '<p>El número de columnas <span class="rojo">debe estar entre 0 y 10</span></p>
              <p><a href = "formulario.html">Volver al principio</a></p>';
    }
} else {
    echo '<p>No ha escrito <span class="rojo">el número de celdas</span> numeradas como <span class="rojo" >número entero</span></p>
          <p><a href = "formulario.html">Volver al principio</a></p>';
}
echo '</body>
      </html>';
?>