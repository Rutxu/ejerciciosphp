<?php
$conexion = new mysqli('localhost','root','','tienda');

echo'   <html>
            <head>
            <head>
            <body>
                <h1>Seleccione una categoria<h1>
                <form action="accion.php" method="post">
                    <table>
                            <th>Categoría</th>
                            <th>
                                <select name="descripcion_categoria">';

$resultado = $conexion->query('SELECT descripcion_categoria FROM categorias');
$reg = $resultado->fetch_array();

while($reg != null){

    echo' <option>'.$reg['descripcion_categoria'].'</option>';
    $reg = $resultado->fetch_array();
}
$resultado->close();
$conexion->close();

echo'                           </select>
                            </th>
                        <tr>
                    </table>
                    <button type="submit" name="enviar">Enviar</button>';


?>