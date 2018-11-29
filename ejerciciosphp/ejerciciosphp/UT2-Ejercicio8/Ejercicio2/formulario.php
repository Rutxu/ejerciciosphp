<?php
error_reporting(0);
echo'
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/esti.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Tabla con Casillas de Verificación</h3>
    <form action=' .$_SERVER['PHP_SELF'].' method="post">
    <p>Escribe un número y dibujará una tabla cuadrada de ese tamaño con casillas de verificación en cada casilla</p>
        <table>
            <tr>
                <td>Tamaño: </td>
                <td><input type="number" name="n" required="required"/></td>
                <td><button type="submit" name="enviar">Dibujar</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
';
echo'
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1 Paso 1</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/formu.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Tabla con Casilla de Verficación - Paso 1</h3>
  	<form method="POST" action=' .$_SERVER['PHP_SELF'].'>
    <table>
';

$n = $_POST["n"];
$f = 0;
$c = 0;
$num=1;


for ($f = 0; $f < $n; $f++) {
    echo'<tr>';
    for ($c = 0; $c < $n; $c++) {
        echo'<td><input type="checkbox" name="num[]" value='.$num.' />'.$num.'</td>';
        $num++;
    }
    echo'</tr>';
}
echo'<input type="hidden" value='.$n.' name ="nt"/>';

echo'
    </table>
    <button type="submit">Contar</button>
    <button type="reset" name="borrar">Borrar</button>
    </form>
   </div>
  </body>
</html>
';
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