<?php
$conexion = new mysqli('localhost','root','','inmobiliaria');

echo'   <html>
            <head>
                <title>Ejercicio 2</title>
                <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
                <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
            <head>
            <body>
                <div class="cuadro">
                <h1>Consulta de Noticias<h1>
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Categoria</th>
                        <th>Fecha</th>
                        <th>Imagen</th>
                    </tr>';
$conexion ->query('SET NAMES utf8');
$resultado = $conexion->query('SELECT * FROM noticias order by fecha DESC');
$reg = $resultado->fetch_array();


while($reg != null){

    echo'       <tr>
                    <td>'.$reg['titulo'].'</td>
                    <td>'.$reg['texto'].'</td>
                    <td>'.$reg['categoria'].'</td>
                    <td>'.date('j/n/Y', strtotime($reg['fecha'])). '</td>';
    if($reg['imagen']==NUll){
        echo        '<td><img src="Imagenes/puntoamarillo.gif"/></td>';
    }
    else{
        echo        '<td><a href="Imagenes/'.$reg['imagen'].'" target="_blank"><img src="Imagenes/ico-fichero.gif" href=""/></a></td>';
    }
    echo'       <tr>';
    $reg = $resultado->fetch_array();
}
$resultado->close();
$conexion->close();


echo'           </table>
            </div>
            <body>
        </html>';


?>