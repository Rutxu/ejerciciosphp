<?php
$conexion = new mysqli('localhost','root','','inmobiliaria');

echo'   <html>
            <head>
                <title>Ejercicio 3</title>
                <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
                <link rel="stylesheet" type="text/css" href="estilo/principal.css" media="screen"/>
            <head>
            <body>
                <div class="cuadro">
                <h1>Consulta de noticias</h1>
                <form action="accion.php" method="post">
                    <table>
                            <td>Mostrar noticias de la categoria: </td>
                            <td>
                                <select name="categoria">
                                <option>Todas</option>';

$resultado = $conexion->query('SELECT DISTINCT categoria FROM noticias');
$reg = $resultado->fetch_array();

while($reg != null){
    
    echo' <option>'.$reg['categoria'].'</option>';
    $reg = $resultado->fetch_array();
}
$resultado->close();
$conexion->close();

echo'                           </select>
                            </td>
                        <tr>
                    </table>
                    <button type="submit" name="enviar">Enviar</button>
                </div>
            </body>
        </html>';


?>