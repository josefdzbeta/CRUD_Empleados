<?php
    require 'configdb.php';
    $conectar=new mysqli(HOSTNAME, USERNAME, PW, DB);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Borrar</title>
    </head>
    <body>
        <h2>Empleado eliminado</h2>
        <?php
            $consulta="DELETE FROM empleados WHERE DNI='".$_GET['dni']."';";
            $resultado=$conectar->query($consulta);
            header("refresh:1;url=listado.php");
        ?>
    </body>
</html>