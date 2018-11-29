<?php
$dni = "44435968";

if(strlen($dni)==8){
    if(ctype_digit($dni)){
        $valor= (int) ($dni / 23);
        $valor *= 23;
        $valor= $dni - $valor;
        
        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letraNif= substr ($letras, $valor, 1);
    }
}
echo '<p>Tu letra de NIF es '.$letraNif.'</p>';

?>