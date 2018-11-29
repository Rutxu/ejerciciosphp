<?php
    $suma = 0;
    for($num=0;$num<1000;$num++){

        if($num%2==0){
            $suma = $suma + $num;
        }

    }

    echo "<p>La suma es: $suma</p>";
?>