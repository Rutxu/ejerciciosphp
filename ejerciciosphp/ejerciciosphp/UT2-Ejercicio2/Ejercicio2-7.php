<?php
    include "Ejercicio2-7-fun.php";

    $peso = 70;
    $altura = 170;

    echo "<p>Indice de masa corporal</p>";
    echo "<p> La altura es de: $altura </p>";
    echo "<p> El peso es de: $peso </p>";
    echo "<p>IMC:".imc($peso,$altura)."</p>" ;
?>