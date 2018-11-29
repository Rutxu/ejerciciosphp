<?php

$dni = $_POST["dni"];

if(strlen($dni)==8){
    if(ctype_digit($dni)){
        $valor= (int) ($dni / 23);
        $valor *= 23;
        $valor= $dni - $valor;

        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letraNif= substr ($letras, $valor, 1);

        echo '<html>
        <head>
            <title>Ejercicio 1 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
            <div class="cuadro">
            <h3>Calcula letra DNI - Resultado</h3>
            <p>Tu letra de NIF es '.$letraNif.'</p>
            <p><a href = "formulario.html">Volver al principio</a></p>
            </div>
        </body>
      </html>';
    }
    
}
else{
    echo '<html>
        <head>
            <title>Ejercicio 1 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
            <div class="cuadro">
            <h3>Calcula letra DNI - Resultado</h3>
            <p>Ha introducida un DNI no valido '.$dni.'</p>
            <p><a href = "formulario.html">Volver al principio</a></p>
            </div>
        </body>
      </html>';
}
?>