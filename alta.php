<?php
    require 'configdb.php'; //Importamos credenciales.
    $conectar=new mysqli(HOSTNAME, USERNAME, PW, DB);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/general.css">
        <title>Alta empleados</title>
    </head>
    <body>
        <h1>Añadir empleado</h1>
       
        <form action="alta.php" method="post">
            <label for="dni">DNI*</label><br/>
            <input type="text" name="dni" id="dni"/><br/>
            <label for="nombre">Nombre*</label><br/>
            <input type="text" name="nombre" id="nombre"/><br/>
            <label for="email">eMail</label><br/>
            <input type="text" name="email" id="email"/><br/>
            <label for="tfno">Teléfono*</label><br/>
            <input type="text" name="tfno" id="tfno"/><br/>
            <input type="submit" value="Añadir"/>
            <input type="reset" value="Borrar"/><br/>
            <a href="index.html">Volver al índice</a>
        </form>
        <?php
            
            if($_POST){
                $consulta="INSERT INTO empleados (DNI, Nombre, Correo, Telefono) VALUES ('".$_POST['dni']."', '".ucwords($_POST['nombre'])."', '".$_POST['email']."', '".$_POST['tfno']."');";
                $resultado=$conectar->query($consulta); 
                echo '<p>Datos añadidos</p>'; 
            }
        ?>
    </body>
</html>