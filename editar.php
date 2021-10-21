<?php
    require 'configdb.php';
    $conectar=new mysqli(HOSTNAME, USERNAME, PW, DB);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $consulta="SELECT * FROM empleados WHERE DNI='".$_GET['dni']."';";
            $resultado=$conectar->query($consulta);
            $fila=$resultado->fetch_assoc();
        ?>
        <form action="editar.php" method="post">
            <legend>Editar datos</legend>
            <label for="dni">DNI: </label>
            <?php
                echo '<input type="text" name="dni" id="dni" disabled="disabled" value="'.$fila['DNI'].'"/><br/>';
            ?>
             <label for="nombre">Nombre: </label>
            <?php
                echo '<input type="text" name="nombre" id="nombre" value="'.$fila['Nombre'].'"/><br/>';
            ?>
             <label for="email">Correo: </label>
            <?php
                echo '<input type="text" name="email" id="email" value="'.$fila['Correo'].'"/><br/>';
            ?>
             <label for="tfno">Teléfono: </label>
            <?php
                echo '<input type="text" name="tfno" id="tfno" value="'.$fila['Telefono'].'"/><br/>';
            ?>
            <input type="submit" value="Editar">
            <a href="listado.php">Cancelar</a>
        </form>
        <?php
            if($_POST){

                $consulta="UPDATE empleados SET dni = 95690310J WHERE dni = 1 ";
                $resultado=$conectar->query($consulta); 
                echo '<p>Datos añadidos</p>'; 
            }
        ?>
    </body>
</html>