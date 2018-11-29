<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-3");

echo "<p>Ejercicio 3</p>";

$a=array(1,2,3,1,1,2,3,3,4,4,4,0,1);
$b=array("blanco","azul","blanco","blanco","azul","Blanco","Azul");
$c=array("b" =>"verde",
         "c" =>"rojo",
         "e" =>"verde",
         "f" =>"Rojo",
         "g" =>"Verde",
         "a" =>"rojo",
         "d" =>"azul");

echo "<p>Arrays</p>";
        print_r($a);
        echo"<br>";
        print_r($b);
        echo"<br>";
        print_r($c);

echo "<p>Borrar registro</p>";
        print_r($c);
        unset($c ["c"]);
        echo"<br>";
        print_r($c);

echo "<p>Función sort</p>";
    sort($a);
    print_r($a);
    echo"<br>";
    sort($b);
    print_r($b);
    echo"<br>";
    sort($c);
    print_r($c);

echo "<p>Función rsort</p>";
    rsort($a);
    print_r($a);
    echo"<br>";
    rsort($b);
    print_r($b);
    echo"<br>";
    rsort($c);
    print_r($c);

echo "<p>Función ksort</p>";
    ksort($a);
    print_r($a);
    echo"<br>";
    ksort($b);
    print_r($b);
    echo"<br>";
    ksort($c);
    print_r($c);

echo "<p>Función krsort</p>";
    krsort($a);
    print_r($a);
    echo"<br>";
    krsort($b);
    print_r($b);
    echo"<br>";
    krsort($c);
    print_r($c);

echo "<p>Función asort</p>";
    asort($a);
    print_r($a);
    echo"<br>";
    asort($b);
    print_r($b);
    echo"<br>";
    asort($c);
    print_r($c);

echo "<p>Función arsort</p>";
    arsort($a);
    print_r($a);
    echo"<br>";
    arsort($b);
    print_r($b);
    echo"<br>";
    arsort($c);
    print_r($c);

include("../UT2-Ejercicio2B/pie_html.php");
?>