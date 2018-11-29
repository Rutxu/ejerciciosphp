<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3 </title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/formu.css" media="screen"/>
</head>
<body>
    <div class="cuadro">
    <h3>Ejercicio sobre Arrays</h3>
    <div class="izq">
        <button class="arribaiz" type="" onclick="">Extrae del principio</button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="text" name="valor" value="" required="required"/>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button class ="abajoiz" type="">Añade al final</button>
        
    </div>
    <div class="der">
    	<button class="arribade" type="">Inserta al principio</button>
    	<br>
        <br>
        <br>
        <br>
        <br>
        <input type="text" name="" required="required"/>
        <br>
        <br>
        <br>
        <br>
        <br>
    	<button class ="abajode" type="">Extrae del final</button>
    </div>
    <div class="centro">
    <table>
    	<tr>
    		<th>Posición</th>
    		<th>Valor</th>
    	<tr>
<?php
$ciudades = array("Álava","Bilbao","Madrid","Valencia","Zaragoza");

for ($i = 0; $i < count($ciudades); $i++) {
    
    echo '<tr>
            <td>'.$i.'</td>
            <td>'.$ciudades[$i].'</td>
          </tr>';
}
?>
    
</table>
</div>
   </div>
  </body>
</html>

<?php 

function extraer() {

    echo '<!DOCTYPE html>
    <html>
    <head>
    <title>Ejercicio 3 </title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo/formu.css" media="screen"/>
    </head>
    <body>
    <div class="cuadro">
    <h3>Ejercicio sobre Arrays</h3>
    <div class="izq">
    <button class="arribaiz" type="submit" onclick="extraer()">Extrae del principio</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="text" name="" value='.array_shift($ciudades).' required="required"/>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button class ="abajoiz" type="">Añade al final</button>
    
    </div>
    <div class="der">
    <button class="arribade" type="">Inserta al principio</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="text" name="" required="required"/>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button class ="abajode" type="">Extrae del final</button>
    </div>
    <div class="centro">
    <table>
    <tr>
    <th>Posición</th>
    <th>Valor</th>
    <tr>';
    
    for ($i = 0; $i < count($ciudades); $i++) {
        
        echo '<tr>
            <td>'.$i.'</td>
            <td>'.$ciudades[$i].'</td>
          </tr>';
    }
    
echo '</table>
</div>
   </div>
  </body>
</html>';
    
}
?>