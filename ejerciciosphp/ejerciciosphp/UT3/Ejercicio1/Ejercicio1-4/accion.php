<?php
$conexion = new mysqli('localhost','root','','tienda');

$descripcion_categoria = $_POST['descripcion_categoria'];

$consulta = "SELECT codigo_categoria FROM categorias WHERE descripcion_categoria = '$descripcion_categoria'";

$resultado = $conexion->query($consulta);
$row = $resultado -> fetch_array();
$codigo_categoria = $row['codigo_categoria'];

echo'   <html>
            <head>
            <head>
            <body>
                <h1>Insertar un Producto</h1>
                <form action="accion2.php" method="post">
                <p>Categoria: '.$codigo_categoria.'</p>
                <input type="text" name="codigo" value='.$codigo_categoria.' hidden="hidden"></input>
                    <table>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                        <tr>';

$consulta2 = "SELECT codigo_producto,descripcion,precio,stock FROM productos where codigo_categoria = '$codigo_categoria'";
$resultado2 = $conexion -> query($consulta2);
$row = $resultado2 -> fetch_array();

while($row != NULL) {

    echo'               <tr>
                            <td>'.$row['codigo_producto'].'</td>
                            <td>'.$row['descripcion'].'</td>
                            <td>'.$row['precio'].'</td>
                            <td>'.$row['stock'].'</td>
                        </tr>';
    $row = $resultado2 -> fetch_array();
}

echo'               </table>
                <button type="submit" name="enviar">Añadir Producto</button>
                </form>';

?>