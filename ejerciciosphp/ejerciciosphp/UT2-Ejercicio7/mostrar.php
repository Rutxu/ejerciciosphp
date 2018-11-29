<?php

echo'
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1 Receta</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/formulario1.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Recetas de Cocina</h3>';

$nombrere = $_POST["nom"];
$realizar = $_POST["receta"];
$ingre = $_POST["ingre"];
$cant = $_POST["cant"];
$uni = $_POST["uni"];

echo'<p class="verde">Receta incorporada</p>
     <p>Receta de <b>'.$nombrere.'</b></p>';

for ($i = 0; $i < (count($ingre)); $i++) {

    echo'<ul>
        <li>'.$ingre[$i].': - '.$cant[$i].' - '.$uni[$i].'</li>
        </ul>';
}

echo'<p><b>Realización: </b></p>
     <p>'.$realizar.'</p>';