<?php
$conexion = new PDO('mysql:host=localhost;dbname=almacen', 'root', '');
$conexion -> query ("set names utf8");


echo'   <html>
            <head>
                <title>Ejercicio 8</title>
                <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
                <link rel="stylesheet" type="text/css" href="" media="screen"/>
            <head>
            <body>
                <header>
                    <h1>Listado de productos por familia</h1>
                    <form action='.$_SERVER['PHP_SELF'].' method="post">
                        <p>
                            Familia:
                            <select name="codfami">';

                            $resultado = $conexion->query('SELECT nombre FROM familia');

                            while($reg = $resultado->fetch()){

                                echo' <option value="'.$reg['nombre'].'">'.$reg['nombre'].'</option>';

                            }

echo'                       </select>

                            <button type="submit" name="enviar">Mostrar productos</button>
                        </p>
                    </form>
                </header>
                <main>';

                            $codfami = $_POST['codfami'];
                            print $codfami;

                            $codigo = "Select cod from familia where nombre = '$codfami'";
                            $resultado2 = $conexion ->query($codigo);
                            $reg2 = $resultado2->fetch();

                            $consulta3 = "Select nombre_corto,PVP from producto where familia ='$reg2[0]'";
                            $resultado3 = $conexion->query($consulta3);

                            while($reg3 = $resultado3->fetch()){

                                echo' <p>'.$reg3['nombre_corto'].'</p>';

                            }

echo'           </main>
                <footer>
                </footer>
            </body>
        </html> ';

?>