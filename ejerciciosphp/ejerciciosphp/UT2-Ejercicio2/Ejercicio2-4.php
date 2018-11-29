<?php
    function gradosF($temp){
        $tempF = (1.8 * $temp) + 32;
        return $tempF;
    }

    $C = 18;
    echo "<p> Hay $C ºC </p>";
    echo "<p> En ºF son: ".gradosF($C)." ºF</p>"  ;
?>