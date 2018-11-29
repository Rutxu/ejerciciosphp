<?php

    function concatenar_cadena($cadena1,$cadena2){
        $cadenaf = $cadena1 . $cadena2;
        return $cadenaf;
}

    $cad1 = "Hola Mundo";
    $cad2 = " Buenas Tardes";
    echo concatenar_cadena($cad1, $cad2);
?>