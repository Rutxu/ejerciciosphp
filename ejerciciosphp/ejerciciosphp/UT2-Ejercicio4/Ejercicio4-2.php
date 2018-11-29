<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-2");

echo "<p>Ejercicio 2</p>";

$nombres = array( "Roberto", "juan", "Marta", "Mercedes", "martín", "Jorge", "Miriam", "Nanci","MIRTA");
$final = array();

foreach ($nombres as $nom){
    if((substr($nom, 0,1) == "m" ||substr($nom, 0,1) == "M" )){
        $final[] = $nom;
    }
}

for ($i = 0; $i <= count($final); $i++){
    if ($i < count($final)-1){
        $c = substr($final[$i],0,1);
        $c2 = substr($final[$i],1);
        print strtoupper($c) .strtolower($c2).",";
    }
    elseif($i==count($final)-1){
        print strtoupper($c) .strtolower($c2).".";
    }
}

include("../UT2-Ejercicio2B/pie_html.php");
?>