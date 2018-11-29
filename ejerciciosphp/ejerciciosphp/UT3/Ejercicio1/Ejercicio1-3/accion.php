<?php
$conexion = new mysqli('localhost','root','','tienda');

$codigo_producto = $_POST['codigo_producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$descripcion_categoria = $_POST['descripcion_categoria'];

$consulta = "SELECT codigo_categoria FROM categorias WHERE descripcion_categoria = '$descripcion_categoria'";

$resultado = $conexion->query($consulta);
$row = $resultado -> fetch_array();
$codigo_categoria = $row['codigo_categoria'];

$insertar = 'INSERT INTO productos(codigo_producto,descripcion,precio,stock,codigo_categoria) Values (?,?,?,?,?)';
$resultado2 = $conexion ->prepare($insertar);

$resultado2 -> bind_param("ssdis", $codigo_producto,$descripcion_producto,$precio,$stock,$codigo_categoria);
$resultado2->execute();
$resultado2->close();

header('Location: ejercicio3.php');
?>