<?php
    echo"<h3>Ejercicio 1.4</h3>";
    $sum = 0;
    $num = 0;
    do{
        $sum = $sum + $num;

        if($sum<=80){
           print $num;
           echo "<p> La suma: $sum </p>";
           echo "<br>";
        }

        $num++;
    }while($sum<80);

?>