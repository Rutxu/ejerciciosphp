
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
  	<form method="POST" action="numeros.php">
    <table>
<?php

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
?>
    </table>
    <button type="submit">Contar</button>
    <button type="reset" name="borrar">Borrar</button>
    </form>
   </div>
  </body>
</html>
