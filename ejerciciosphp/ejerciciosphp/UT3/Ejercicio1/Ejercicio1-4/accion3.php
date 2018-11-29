<?php
$conexion = new mysqli('localhost','root','','tienda');

$codigo_producto = $_POST['codigo_producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$codigo_categoria = $_POST['codigo'];



$insertar = 'INSERT INTO productos(codigo_producto,descripcion,precio,stock,codigo_categoria) Values (?,?,?,?,?)';
$resultado2 = $conexion ->prepare($insertar);

$resultado2 -> bind_param("ssdis", $codigo_producto,$descripcion_producto,$precio,$stock,$codigo_categoria);
$resultado2->execute();
$resultado2->close();

header('Location: ejercicio4.php');
?>