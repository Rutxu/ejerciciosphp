<?php
error_reporting(0);
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$edad = $_POST["edad"];
$peso = $_POST["peso"];
$sexo = $_POST["sexo"];
$ec = $_POST["ec"];
$aficion = $_POST["aficion"];



echo '<html>
        <head>
            <title>Ejercicio 3 Resultado</title>
            <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
            <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
        </head>
        <body>
        <div class="cuadro">
        <h3>Datos Personales - Respuesta</h3>';
//Nombre
if(preg_match("/[\d]/", $nom)){

     echo '<p>Ha introducido un nombre que no respeta el filtro</p>';
}
else{
    if(preg_match("/[a-zA-ZáéíóúÁÉÍÓÚñÑ-]/", $nom)){
        echo '<p>Su nombre es <b>'.$nom.'</b></p>';
    }
    else{
        echo '<p>Ha introducido un nombre que no respeta el filtro</p>';
    }
}
//Apellido
if(preg_match("/[\d]/", $ape)){

    echo '<p>Ha introducido un nombre que no respeta el filtro</p>';
}
else{
    if(preg_match("/[a-zA-ZáéíóúÁÉÍÓÚñÑ-]/", $ape)){
        echo '<p>Su nombre es <b>'.$ape.'</b></p>';
    }
    else{
        echo '<p>Ha introducido un nombre que no respeta el filtro</p>';
    }
}
//Edad
if($edad == "men20"){
    echo '<p>Tiene <b>menos de 20 años</b></p>';
}
elseif($edad == "20e39"){
    echo '<p>Tiene <b>entre 20 y 39 años</b></p>';
}
elseif($edad == "40e59"){
    echo '<p>Tiene <b>entre 40 y 59 años</b></p>';
}
elseif($edad == "mas60"){
    echo '<p>Tiene <b>60 años o más</b></p>';
}
else{
    echo '<p><span class="rojo">No ha indicado su edad</span></p>';
}
//Peso
if(ctype_digit($peso) && $peso>0){
    echo '<p>Su peso es de <b>'.$peso.'</b>kg</p>';
}
else{
    echo '<p><span class="rojo">No ha escrito su peso con numero</span></p>';
}
//Sexo
if ($sexo == ""){
    echo '<p><span class="rojo">No ha marcado su sexo</span></p>';
}
elseif($sexo == "hombre") {
    echo '<p>Es un <b>hombre</b></p>';
}
elseif($sexo == "mujer") {
    echo  '<p>Es una <b>mujer</b></p>';
}
//Estado Civil
if ($ec == "soltero"){
    echo '<p>Su estado civil es <b>soltero</b></p>';
}
elseif($ec == "casado") {
    echo '<p>Su estado civil es <b>casado</b></p>';
}
elseif($ec == "otro") {
    echo '<p>Su estado civil es <b>otro</b></p>';
}
else{
    echo '<p><span class="rojo">No ha marcado su estado civil</span></p>';
}
//Aficiones
    //6Casillas-empieza C
if(in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) &&
    in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Deporte-Música-Televisión</b></p>';
}
    //5Casillas-empieza C
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) &&
        in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Deporte-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion)
        && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Deporte-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("m",$aficion)
        && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-M�sica-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)
        && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Deporte-Música-Televisión</b></p>';
}

elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)
    && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Deporte-Música-Televisión</b></p>';
}
    //4Casillas-empieza C
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Deporte</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("m",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("d",$aficion) && in_array("m",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Deporte-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Deporte-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-M�sica-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Deporte-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Deporte-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Música-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("d",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion) ){

        echo '<p>Sus aficiones son: <b>Cine-Deporte-Música-Televisión</b></p>';
}
    //3Casillas-empieza C
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("t",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Tebeos</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Deporte</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("l",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Deporte</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Deporte-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Deporte-Televisión</b></p>';
}
elseif (in_array("c",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Música-Televisión</b></p>';
}
    //2Casillas-empieza C
elseif (in_array("c",$aficion) && in_array("l",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Literatura</b></p>';
}
elseif (in_array("c",$aficion) && in_array("t",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Tebeos</b></p>';
}
elseif (in_array("c",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Deporte</b></p>';
}
elseif (in_array("c",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Música</b></p>';
}
elseif (in_array("c",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine-Televisión</b></p>';
}
    //1Casilla-empieza C
elseif (in_array("c",$aficion)){

        echo '<p>Sus aficiones son: <b>Cine</b></p>';
}
    //5Casillas-empieza L
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)
        && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Deporte-Música-Televisión</b></p>';
}
    //4Casillas-empieza L
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Deporte-Música</b></p>';
}
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Deporte-Televisión</b></p>';
}
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Música-Televisión</b></p>';
}
elseif (in_array("l",$aficion) && in_array("d",$aficion) && in_array("m",$aficion) && in_array("yv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Deporte-Música-Televisión</b></p>';
}
    //3Casillas-empieza L
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Deporte</b></p>';
}
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Música</b></p>';
}
elseif (in_array("l",$aficion) && in_array("t",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos-Televisión</b></p>';
}
elseif (in_array("l",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Deporte-Música</b></p>';
}
elseif (in_array("l",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Deporte-Televisión</b></p>';
}
elseif (in_array("l",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-M�sica-Televisión</b></p>';
}
    //2Casillas-empieza L
elseif (in_array("l",$aficion) && in_array("t",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Tebeos</b></p>';
}
elseif (in_array("l",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Deporte</b></p>';
}
elseif (in_array("l",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Música</b></p>';
}
elseif (in_array("l",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura-Televisión</b></p>';
}
    //1Casilla-empieza L
elseif (in_array("l",$aficion)){

        echo '<p>Sus aficiones son: <b>Literatura</b></p>';
}
    //4Casillas-empieza T
elseif (in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Deporte-Música-Televisión</b></p>';
}
    //3Casillas-empieza T
elseif (in_array("t",$aficion) && in_array("d",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Deporte-Música</b></p>';
}
elseif (in_array("t",$aficion) && in_array("d",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Deporte-Televisión</b></p>';
}
elseif (in_array("t",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Música-Televisión</b></p>';
}
    //2Casillas-empieza T
elseif (in_array("t",$aficion) && in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Deporte</b></p>';
}
elseif (in_array("t",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Música</b></p>';
}
elseif (in_array("t",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos-Televisión</b></p>';
}
    //1Casilla-empieza T
elseif (in_array("t",$aficion)){

        echo '<p>Sus aficiones son: <b>Tebeos</b></p>';
}
    //3Casillas-empieza D
elseif (in_array("d",$aficion) && in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Deporte-Música-Televisión</b></p>';
}
    //2Casillas-empieza D
elseif (in_array("d",$aficion) && in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Deporte-Música</b></p>';
}
elseif (in_array("d",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Deporte-Televisión</b></p>';
}
    //1Casilla -empieza D
elseif (in_array("d",$aficion)){

        echo '<p>Sus aficiones son: <b>Deporte</b></p>';
}
    //2Casillas-empieza M
elseif (in_array("m",$aficion) && in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Música-Televisión</b></p>';
}
    //1Casilla -empieza M
elseif (in_array("m",$aficion)){

        echo '<p>Sus aficiones son: <b>Música</b></p>';
}
    //1Casilla-empieza TV
elseif (in_array("tv",$aficion)){

        echo '<p>Sus aficiones son: <b>Televisión</b></p>';
}
else{
        echo '<p><span class="rojo">No ha marcado ninguna afición</span></p>';
}

echo' <a href="formulario.html">Volver</a>
      </div>
    </body>
   </html>';
?>
