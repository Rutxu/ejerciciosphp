<?php
$tem = $_POST["tem"];

if(ctype_digit($tem)){
echo '<html>
        <head>
            <title>Ejercicio 4 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo2.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Convertidor de temperaturas Celsius/Fahrenheit - Resultado</h3>';


$uni = $_POST["unidad"];

$n_temp = 0;

if($uni == 'Celsius') {
    $n_temp = (1.8 * $tem) + 32;
    echo '<p>'.$tem.' ºC son '.$n_temp.' ºF</p>';
} else {
    $n_temp = ($tem - 32) / 1.8;
    echo' <p>'.$tem.' ºF son '.$n_temp.' ºC</p>';
}

echo
    '<a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';
}
else{
    echo '<html>
        <head>
            <title>Ejercicio 2 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo2.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Convertidor de temperaturas Celsius/Fahrenheit - Resultado</h3>
        <p> No ha introducido ningún valor</p>
        <a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';
}
?>