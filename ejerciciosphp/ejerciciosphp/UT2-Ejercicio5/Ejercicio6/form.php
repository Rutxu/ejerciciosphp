<?php

$n = $_POST["n"];
$nrand = rand(1, 10);

echo '<html>
        <head>
            <title>Ejercicio 6 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Adivinar Número - Resultado</h3>';

if($n==""){
    echo '<p>No ha escrito ningún numero. Por favor elija un número menor o igual de 10</p>
          <a href="formulario.html">Volver al formulario</a>
          </div>
     </body>
    </html>';
}
else{
    if($n <= 10) {
        if($n > $nrand) {
            echo '<p>El numero '.$n.' fue muy grande</p>
                  <p>Yo pensé en el número '.$nrand.'. Lo siento</p>
                  <a href="formulario.html">Volver al formulario</a>
                </div>
            </body>
        </html>';

    }   elseif ($n < $nrand) {
            echo '<p>El numero '.$n.' fue muy pequeño</p>
                  <p>Yo pensé en el número '.$nrand.'. Lo siento</p>
                  <a href="formulario.html">Volver al formulario</a>
                </div>
            </body>
        </html>';

    }   else {
            echo '<p>¡Acertaste! </p>
                  <p>El numero era '.$nrand.'</p>
                  <a href="formulario.html">Volver al formulario</a>
                </div>
            </body>
        </html>';
    }

}   else {
        echo '<p>El numero es demasiado grande '.$n.' . Tiene que ser menor o igual de 10</p>
              <a href="formulario.html">Volver al formulario</a>
            </div>
        </body>
    </html>';
    }
}
?>