<?php

$cant = $_POST["cant"];
$precio;
echo '<html>
        <head>
            <title>Ejercicio 1 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/esti.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">';
if(ctype_digit($cant)){
    if($cant==0){
        echo '<p><span class="rojo">Faltan Datos</span></p>
              <a href="formulario.html">Volver</a>';
    }
    elseif($cant<10){
        $precio = $cant * 2;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>
              <a href="formulario.html">Volver</a>';
    }
    elseif($cant>=10 && $cant<30){
        $precio = $cant * 1.5;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>
              <a href="formulario.html">Volver</a>';
    }
    else{
        $precio = $cant * 1;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>
              <a href="formulario.html">Volver</a>';
    }
}
else{
    echo '<p><span class="rojo">Cantidad Erronea</span></p>
          <a href="formulario.html">Volver</a>';
}

    echo'</div>
       </body>
    </html>';
?>