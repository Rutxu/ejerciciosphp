<?php
echo '<html>
        <head>
            <title>Ejercicio 3 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Calcular año bisiesto - Resultado</h3>';

$ano = $_POST['ano'];

if(ctype_digit($ano)){
    if($ano <= 10000) {
        $div4 = round($ano / 4) - $ano / 4;
        $div100 = round($ano / 100) - $ano / 100;
        $div400 = round($ano / 400) - $ano / 400;
        if($div4 == 0 && $div100 !== 0 || $div400 == 0) {
            echo '<p>El año '.$ano.' es año bisiesto</p>';
        } else {
            echo '<p>El año '.$ano.' no es año bisiesto</p>';
        }
    } else {
        echo '<p>El año '.$ano.' supera el limite de 10.000</p>';
    }
} else {
    echo '<p>El valor introducido contiene valores que no son digitos<br>
          Ha introducido: '.$ano.'</p>';
}
echo '<a href="formulario.html">Volver al formulario</a>
      </div>
     </body>
    </html>';
?>