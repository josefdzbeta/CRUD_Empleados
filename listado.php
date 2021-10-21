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
        <link rel="stylesheet" href="css/general.css">
        <title>Listar empleados</title>
    </head>
    <body>
        <form action="listado.php" method="post">
            <label for="dni">DNI: </label>
            <input type="text" name="dni" id="dni"/>
            <select name="filtrado" id="filtrado">
                <option value="ASC">Nombre (A-Z)</option>
                <option value="DESC">Nombre (Z-A)</option>
            </select>
            <input type="submit" value="Listar">
        </form>
        <?php
            if($_POST){
                if(trim($_POST['dni'])=="")
                    $consulta="SELECT * FROM empleados ORDER BY Nombre ".$_POST['filtrado'].";";
                else
                    $consulta="SELECT * FROM empleados WHERE DNI LIKE '".$_POST['dni']."%' ORDER BY Nombre ".$_POST['filtrado'].";";
                $resultado=$conectar->query($consulta);
                echo '<table>';
                while($fila=$resultado->fetch_assoc()){
                    echo '<p>'.$fila['DNI'].': </p>';
                    echo '<p>'.$fila['Nombre'].'</p>';
                    echo '<p><a href="borrar.php?dni='.$fila['DNI'].'">Borrar</a>';
                    echo '<a href="editar.php?dni='.$fila['DNI'].'">Editar</a></p>';
                }
            }
        ?>
        <a href="index.html">Volver al índice</a>
    </body>
</html>