<?php
    function imc($peso,$altura){
        $altm = $altura/100;

        $imc = $peso/(pow($altm,2));

        return $imc;
    }
?>