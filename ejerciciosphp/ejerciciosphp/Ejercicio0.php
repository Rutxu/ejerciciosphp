<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 0</title>
	</head>
	<body>

		<h3>Ejercicio 0.1</h3>
		<?php
		  $nombre = "Rubén";
		  $apellidos = "Sierra Pérez";
		  $edad = "22";
		  echo "<p>Mi nombre es: $nombre </p>";
		  echo "<p> $nombre  $apellidos y tengo $edad años</p>";
		?>

		<h3>Ejercicio 0.2</h3>
		<?php
		  $res = (125 * 30)/100;
		  echo "<p> El porcentaje 30% de 125 es: $res";
		?>

		<h3>Ejercicio 0.3</h3>
		<?php
		  $alto = 10.5;
		  $ancho = 5;
		  $precio = 3.25;
		  $superficie = $alto * $ancho;
		  $total = $superficie * $precio;
		  echo "<p>El pintor ha de invertir $total € para pintar una pared de $alto de alto por $ancho de ancho</p>";
		?>

		<h3>Ejercicio 0.4</h3>
        <?php
            $precio_pantalon = 60; $cant_pantalon = 6;
            $precio_chaqueta_r = 70; $cant_chaqueta_r = 8;
            $precio_chaqueta_a = 90; $cant_chaqueta_a = 4;
            $precio_jerseis = 24; $cant_jerseis = 6;
            $precio_calcetines = 6; $cant_calcetines = 9;

            $total = ($precio_pantalon * $cant_pantalon)+($precio_chaqueta_r * $cant_chaqueta_r)+($precio_chaqueta_a * $cant_chaqueta_a)
                + ($precio_jerseis * $cant_jerseis) + ($precio_calcetines * $cant_calcetines);
            $promedio = ($precio_pantalon + $precio_chaqueta_r + $precio_calcetines + $precio_jerseis + $precio_calcetines)/5;

            echo "<p>Total ganado en el día es: $total €</p>";
            echo "<p>El promedio por prenda es: $promedio €</p>";
        ?>

		<h3>Ejercicio 0.5</h3>
		<?php
		  $cont5 = 0;
		  $cont3 = 0;
		  $n = 0;
		  $n1 = 0;
		  do{
		      if($n%5==0){
		          $cont5 = $cont5 + 1;
		      }
		      $n = $n + 1;
		  }while ($n<=30);

		  do{
		      if($n1%3==0){
		          $cont3 = $cont3 + 1;
		      }
		      $n1 = $n1 + 1;
		  }while ($n1<=30);

		  echo "<p>La cantidad de multiplos de 5 es: $cont5</p>";
		  echo "<p>La cantidad de multiplos de 3 es: $cont3</p>";
		?>

		<h3>Ejercicio 0.6</h3>
         <?php
            $dia = date("j");
            $mes = date ("m");
            $ano = date ("Y");
            $dias = date ("N");

            switch ($dias){
                case 1:
                    $dias = "Lunes";
                    break;
                case 2:
                    $dias = "Martes";
                    break;
                case 3:
                    $dias = "Miércoles";
                    break;
                case 4:
                    $dias = "Jueves";
                    break;
                case 5:
                    $dias = "Viernes";
                    break;
                case 6:
                    $dias = "Sábado";
                    break;
                case 7:
                    $dias = "Domingo";
                    break;
            }

            echo "<p>Hoy es $dia/$mes/$ano y es $dias</p>";
          ?>
          <h3>Ejercicio 0.7</h3>
          <?php 
          $numeros = array(9,5,1,8,2,6,10,7,3,4);
          echo' <p>'.max($numeros).'</p>';
          ?>
          
          <h3>Ejercicio 0.8</h3>
          <?php 
          $cadena1 = "abcdefghi";
          $cadena2 = "123";
          
          echo '<table>
                <tr>
                    <td>Cadena 1</td>
                    <td>'.$cadena1.'</td>    
                <tr>
                <tr>
                    <td>Cadena 2</td>
                    <td>'.$cadena2.'</td>    
                <tr>
                <tr>
                    <td>Subtr_replace(cadena1,cadena2,2)</td>
                    <td>'.substr_replace($cadena1, $cadena2, 2).'</td>    
                <tr>
                <tr>
                    <td>Subtr_replace(cadena1,cadena2,2,3)</td>
                    <td>'.substr_replace($cadena1, $cadena2, 2, 3).'</td>    
                <tr>
                <tr>
                    <td>Subtr_replace(cadena1,cadena2,-2)</td>
                    <td>'.substr_replace($cadena1, $cadena2, -2).'</td>    
                <tr>
                <tr>
                    <td>Subtr_replace(cadena1,cadena2,2,-3)</td>
                    <td>'.substr_replace($cadena1, $cadena2, 2, -3).'</td>    
                <tr>
                </table>';
          ?>
          <h3>Ejercicio 0.9</h3>
          <?php 
            $nomape="rubénsierrapérez";
            
            echo '<p>Número de caracteres: '.strlen($nomape).'</p>';
            
            $nombre = substr($nomape, 0,6);
            echo '<p>Nombre: '.$nombre.'</p>';
            
            $ape1 = substr($nomape, 6,-6);
            $ape2 = substr($nomape, 12);
            echo '<p>Apellidos: '.$ape1. ' '.$ape2.'</p>';
            
            echo '<p>Nombre y apellidos con la primera letra en mayúsculas: '.ucwords($nombre).' '.ucwords($ape1).
            ' '.ucwords($ape2).'</p>';
            
            echo '<p>Extraigo el nombre y lo visualizo en mayúsculas: '.strtoupper($nombre).'</p>';
          ?>
	</body>
</html>
