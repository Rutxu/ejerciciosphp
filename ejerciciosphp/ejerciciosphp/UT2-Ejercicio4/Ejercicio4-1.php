<?php
include("../UT2-Ejercicio2B/cabecera_html.php");
cabezera("Ejercicio4-1");

echo "<p>Ejercicio 1</p>";
$email ="a.b.c.abc@pepe.n.com";

if(strstr($email, "@") && strstr($email, ".")){
    if(!strstr($email, "..")){
        print "<p>La dirección de correo es valida</p>";
    }
    else{
        print "<p>La dirección de correo no es valida</p>";
    }
}
else{
    print "<p>La dirección de correo no es valida</p>";
}
include("../UT2-Ejercicio2B/pie_html.php");
?>