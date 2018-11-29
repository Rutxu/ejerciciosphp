<?php

$mes = 11;
$dia = 32;
$ano = 2018;

if(checkdate($mes, $dia, $ano)){
    echo '<p>La fecha es correcta</p>';
}
else{
    echo '<p>La fecha es incorrecta</p>';
}
?>