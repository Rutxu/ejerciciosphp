<?php
    function bisiesto($año){
        if($año%4 == 0){
            if($año%100 == 0 and $año != 0){
                echo "Es bisiesto";
            }
            else{
                echo "No es bisiesto";
            }
        }
        else{
            echo "No es bisiesto";
        }
    }
    bisiesto(2020);
?>