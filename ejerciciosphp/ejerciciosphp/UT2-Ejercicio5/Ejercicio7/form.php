<?php
error_reporting (0);
$sexo = $_POST["sexo"];

echo '<html>
        <head>
            <title>Ejercicio 7 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Botón de Opción - Resultado</h3>';


if ($sexo == ""){
    echo '<p><span class="rojo">No ha marcado su sexo</span></p>
          <a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';
}
elseif($sexo == "hombre") {
    echo '<p>Es un <span class="verde">hombre</span></p>
          <a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';

} elseif($sexo == "mujer") {
   echo  '<p>Es una <span class="verde">mujer</span></p>
          <a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';

}

?>