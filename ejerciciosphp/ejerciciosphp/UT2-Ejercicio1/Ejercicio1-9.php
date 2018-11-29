<?php
    setlocale(LC_ALL,"es_ES","esp");
    date_default_timezone_set('Europe/Madrid');

    $hora = strftime('%H:%M:%S');
    $dia = strftime('%d');
    $dia2 = strftime('%j');
    $mes = strftime('%B');
    $año = strftime('%Y');

    echo "<p>Cuando se cargó esta página eran las $hora del dia $dia de $mes del año $año</p>
          <p>Es el dia $dia2 del año $año</p>";
?>