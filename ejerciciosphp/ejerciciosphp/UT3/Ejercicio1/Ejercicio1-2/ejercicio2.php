<?php
$conexion = new mysqli('localhost','root','','tienda');

echo'   <html>
            <head>
            <head>
            <body>
                <h1>Categorias<h1>
                <table>
                    <tr>
                        <th>Categoría</th>
                        <th>Descripción</th>
                    </tr>';

$resultado = $conexion->query('SELECT * FROM categorias');
$reg = $resultado->fetch_array();


while($reg != null){

    echo'       <tr>
                    <td>'.$reg['codigo_categoria'].'</td>
                    <td>'.$reg['descripcion_categoria'].'</td>
                <tr>';
    $reg = $resultado->fetch_array();
}
$resultado->close();
$conexion->close();


echo'           </table>
            <body>
        </html>';


?>