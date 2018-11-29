<?php
$deportes = array("fútbol","baloncesto","natación","tenis");

for ($i = 0; $i < count($deportes); $i++) {
    
    echo '<p>Indice: '.$i. ' Deporte: '.$deportes[$i].'</p>';
}

echo '<p>Total de valores contenidos: '.count($deportes).'</p>';

reset($deportes);
echo '<p>Sitúa el puntero en el primer elemento del array y muestra el valor actual, es decir, en
qué posición está situado el puntero actualmente: '.key($deportes).'</p>';

next($deportes);
echo '<p>Avanza una posición y muestra el valor actual: '.key($deportes).'</p>';

end($deportes);
echo '<p>Coloca el puntero en la última posición y muestra su valor: '.key($deportes).'</p>';
?>