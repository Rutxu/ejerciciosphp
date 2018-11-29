<?php
error_reporting (0);
echo '<html>
        <head>
            <title>Ejercicio 8 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Casillas de verificación - Resultado</h3>';

$aficion = $_POST['aficion'];
if(in_array("c", $aficion) && in_array("l", $aficion) && in_array("m", $aficion)) {
   echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">El cine</span></li>
                <li><span class="verde">La literatura</b></li>
                <li><span class="verde">La música</b></li>
           </ol>';

} elseif(in_array("c", $aficion)&& in_array("l", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">El cine</span></li>
                <li><span class="verde">La literatura</span></li>
           </ol>';

} elseif(in_array("c", $aficion) && in_array("m", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">El cine</span></li>
                <li><span class="verde">La música</b></li>
           </ol>';

} elseif(in_array("c", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">El cine</span></li>
           </ol>';

} elseif(in_array("l", $aficion)&& in_array("m", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">La literatura</b></li>
                <li><span class="verde">La música</b></li>
           </ol>';

} elseif(in_array("l", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">La literatura</b></li>
           </ol>';

} elseif(in_array("m", $aficion)) {
    echo '<p>Le gusta: </p>
           <ol>
                <li><span class="verde">La música</b></li>
           </ol>';

} else {
    echo '<p><span class="rojo">No ha marcado ninguna afición.</span></p>';
}
echo '<a href="formulario.html">Volver al formulario</a>
    </div>
   </body>
 </html>';
?>