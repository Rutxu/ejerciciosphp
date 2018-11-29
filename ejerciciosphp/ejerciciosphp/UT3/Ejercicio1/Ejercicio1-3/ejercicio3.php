<?php
$conexion = new mysqli('localhost','root','','tienda');

echo'   <html>
            <head>
            <head>
            <body>
                <h1>Insertar un Producto<h1>
                <form action="accion.php" method="post">
                    <table>
                        <tr>
                            <th>Código</th>
                            <th><input type="text" name="codigo_producto" required="required"/></th>
                        <tr>
                        <tr>
                            <th>Descripción</th>
                            <th><input type="text" name="descripcion_producto" required="required"/></th>
                        <tr>
                        <tr>
                            <th>Precio</th>
                            <th><input type="text" name="precio" required="required"/></th>
                        <tr>
                        <tr>
                            <th>Stock</th>
                            <th><input type="text" name="stock" required="required"/></th>
                        <tr>
                        <tr>
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
                    <table>
                    <button type="submit" name="enviar">Insertar</button>';

?>