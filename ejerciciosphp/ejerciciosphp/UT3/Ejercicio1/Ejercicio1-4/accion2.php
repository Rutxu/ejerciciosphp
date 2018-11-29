<?php
$conexion = new mysqli('localhost','root','','tienda');

echo'   <html>
            <head>
            <head>
            <body>
                <h1>Insertar un Producto en Categoria '.$_POST['codigo'].' <h1>
                <form action="accion3.php" method="post">
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
                            <th><input type="text" value='.$_POST['codigo'].' hidden="hidden" name="codigo"></th>';


echo'                           </select>
                            </th>
                        <tr>
                    <table>
                    <button type="submit" name="enviar">Insertar</button>';
