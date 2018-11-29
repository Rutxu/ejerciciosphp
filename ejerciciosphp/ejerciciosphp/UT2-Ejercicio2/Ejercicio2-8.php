<?php
    include "Ejercicio2-3-fun.php";

    $num1 = mt_rand(1, 100);
    $num2 = mt_rand(1, 100);

    echo "<p>Primer numero random: $num1 </p>";
    echo "<p>Segundo numero random: $num2 </p>";
    echo "<p>El mayor es:".mayor($num1,$num2)."</p>";
?>