<?php
echo'<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="estilo/esti.css" media="screen"/>
</head>
<body>
<div class="cuadro">
<h3>Lista de precios</h3>
<table>
<tr>
<th>Cantidad</th>
<th>Precio Unidad</th>
</tr>
<tr>
<td>Menos de 10</td>
<td>2€</td>
</tr>
<tr>
<td>Entre 10 y 30</td>
<td>1,5€</td>
</tr>
<tr>
<td>Más de 30</td>
<td>1€</td>
</tr>
</table>
<p>Seleccione la cantidad a pedir según nuestras tarifas: </p>
<form method="POST" action=' .$_SERVER['PHP_SELF']. '>
<fieldset>
<legend>Datos personales</legend>
<p>Número de cuadernos: <input type="text" name="cant" value="0">
<button type="submit">Enviar</button></p>
</fieldset>
</form>
</div>
</body>
</html>';

error_reporting(0);
$cant = $_POST["cant"];
$precio;
echo '<html>
        <head>
            <title>Ejercicio 2 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/esti.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">';
if(ctype_digit($cant)){
    if($cant==0){
        echo '<p><span class="rojo">Faltan Datos</span></p>';
    }
    elseif($cant<10){
        $precio = $cant * 2;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>';
    }
    elseif($cant>=10 && $cant<30){
        $precio = $cant * 1.5;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>';
    }
    else{
        $precio = $cant * 1;
        echo '<p>El precio del pedido asciende a '.$precio.'€</p>';
    }
}
else{
    echo '<p><span class="rojo">Cantidad Erronea</span></p>';
}

echo'</div>
       </body>
    </html>';
?>