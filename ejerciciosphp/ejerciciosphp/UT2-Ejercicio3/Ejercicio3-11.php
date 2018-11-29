<?php

$familia = array(
    "Los Simpsons" => array("padre"=>"Homer","madre"=>"Marge","hijos"=>"Bart, Lisa y Maggie"),
    "Los Griffin"  => array("padre"=>"Peter","madre"=>"Lois","hijos"=>"Chirs, Meg y Stewie ")
);

foreach ($familia as $i=>$datos){
    print  $i;
    echo '<p>Padre: ' .$datos['padre'].' </p>';
    echo '<p>Madre: ' .$datos['madre'].' </p>';
    echo '<p>Hijo: ' .$datos['hijos'].' </p>';
}
?>