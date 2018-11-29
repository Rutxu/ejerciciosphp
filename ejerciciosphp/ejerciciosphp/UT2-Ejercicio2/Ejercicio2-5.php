<?php
    function gradosC($temp){
        $tempC = ($temp-32)/1.8;
        return $tempC;
    }

    $F = 64.4;
    echo "<p> Hay $F ºF </p>";
    echo "<p> En ºC son: ".gradosC($F)." ºC</p>"  ;
?>