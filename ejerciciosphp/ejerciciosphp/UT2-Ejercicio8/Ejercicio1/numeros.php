<?php
echo'
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1 Paso 2</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/esti.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Tabla con Casillas de Verificación - Paso 2</h3>

';
$numerot = $_POST["nt"];
$numeros = $_POST["num"];

$total = $numerot * $numerot;

echo '<p>Has marcado '.count($numeros).' casillas de un total de '.$total.': ';

for ($i = 0; $i < (count($numeros)); $i++) {
    echo $numeros[$i].',';
}

echo'</p>';

echo'
    </div>
</body>
</html>
';
?>