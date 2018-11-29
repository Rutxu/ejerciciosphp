<?php

$email = $_POST["email"];

echo '<html>
        <head>
            <title>Ejercicio 5 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Comprobar email - Resultado</h3>';

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo'<p>Esta dirección de correo ('.$email.')<span class="verde"> es válida<span></p>';
        } else {
            echo'<p>La dirección de '.$email.'<span class = "rojo"> no es válida</span></p>';
        }

echo
'<a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';


?>