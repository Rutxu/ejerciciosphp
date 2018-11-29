<?php
    $hora = date("H");

    if($hora>=8 and $hora<13){
        echo "<p>Buenos días</p>";
    }
    elseif ($hora>=13 and $hora<15){
        echo "<p>Que aproveche la comida</p>";
    }
    elseif ($hora>=15 and $hora<18){
        echo "<p>Es la hora del café</p>";
    }
    else{
        echo "<p>Buenas Noches</p>";
    }
    Print $hora;
?>