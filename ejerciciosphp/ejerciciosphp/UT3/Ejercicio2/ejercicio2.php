<?php
$conexion = new mysqli('localhost','root','','agenda');
$conexion ->query("SET NAMES utf8");


if($_POST == NULL){
    
}
else{
    $nombre = $_POST["nom"];
    $telefono = $_POST["tel"];
    
    if($nombre == NULL){
        echo '<p>Introduzca un nombre</p>';
    }
    else{
        
        $consulta2 = "SELECT nombre from contactos where nombre = '$nombre'";
        $resultado2 = $conexion->query($consulta2);
        
        if(mysqli_num_rows($resultado2) == 0){
            if($telefono !=NULL && strlen($telefono)==9){
                $insertar = 'INSERT INTO contactos(nombre,telefono) Values (?,?)';
                $accion = $conexion ->prepare($insertar);
                $accion -> bind_param("ss",$nombre,$telefono);
                $accion->execute();
                $accion->close();
                $nombre ="";
                $telefono="";
            }
            else{
                echo '<p>La longitud del teléfono no es válida</p>';
            }
        }
        else{
            if($telefono == NULL){
                $borrar = "DELETE FROM contactos where nombre = '$nombre'";
                $conexion->query($borrar);
                $nombre ="";
                $telefono="";
                
            }
            else{
                $actualizar = "Update contactos set telefono=? where nombre ='$nombre'";
                $accion2 = $conexion ->prepare($actualizar);
                $accion2 -> bind_param("s",$telefono);
                $accion2->execute();
                $accion2->close();
                $nombre ="";
                $telefono="";
            }
        }
    }
}
echo'   <html>
            <head>
                <title>Ejercicio 2</title>
                <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
                <link rel="stylesheet" type="text/css" href="estilo/estilo.css" media="screen"/>
            <head>
            <body>';

$error = $conexion->connect_errno;
if ($error == null) {
    
    $consulta = "SELECT nombre,telefono from contactos order by nombre";
    $resultado = $conexion->query($consulta);
    
    if($resultado){
        
        $reg=$resultado->fetch_array();
        
        echo'   <h1>Agenda</h1>
                    <ul>';
        while ($reg != null){
            
            echo '<li>'.$reg['nombre'].": ". $reg['telefono'] . " </li>";
            $reg = $resultado->fetch_array();
            
        }
        echo'       </ul>
                <h1>Editar/Añadir/Eliminar contacto</h1>
                    <div class="cuadro">
                        <form action='.$_SERVER['PHP_SELF'].' method="post">
                            <table>
                                <tr>
                                    <td>Nombre: </td>
                                    <td><input type="text" name="nom"/></td>
                                </tr>
                                <tr>
                                    <td>Teléfono: </td>
                                    <td><input type="text" name="tel"/></td>
                                </tr>
                            </table>
                        <button type="submit" name="enviar">Continuar ...</button>
                        </form>
                    </div>'; 
        
    }
    
    $resultado->close();
    $conexion->close();
}
else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

?>