<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1 Receta</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/formulario1.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Recetas de Cocina</h3>
  	<form method="POST" action="mostrar.php">
        <p>Escriba el nombre de la receta: </p>
        <p>Nombre receta: <input type="text" name="nom" required="required" size="60"/></p>
        <p>Escriba los ingredientes de la receta y la cantidad de cada uno:</p>
<?php
$n = $_POST["n"];
$i = 0;


if(ctype_digit($n)){
    echo '<table>';

    for ($i == 0; $i < $n; $i++) {
        echo'<tr>
                <td>Ingrediente: <input type="text" name="ingre[]" size="42" required="required"/></td>
                <td>Cantidad: <input type="number" name="cant[]" size="2" required="required"/></td>
                <td>Unidades: <input type="text" name="uni[]" size="2" required="required"/></td>
            </tr>';
    }
    echo'</table>';
}
?>

        <fieldset>
            <legend>Realización:</legend>
            <textarea rows="7" cols="70" name="receta" required="required"></textarea>
        </fieldset>


<button type="submit" name="añadir">Añadir</button>
        </form>
  	</div>
</body>
</html>

