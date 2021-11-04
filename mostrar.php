<?php
    require_once('./config/dbconfig.php');
    $db = new operaciones();
    $resultado = $db->mostrarDatos();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Operaciones CRUD Orientado a Objetos</title>
    </head>
    <body class="bg-dark">
        <header class="text-center">
           <h1>HEADER</h1>
        </header>
        <aside>
            <nav>
                <ul>
                    <li><a href="index.php">Añadir</a></li>
                    <li><a href="mostrar.php">Mostrar Empleados</a></li>
                    <li><a href="modificar.php">Modificar</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h2 class="text-center">Datos de Empleados</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <td>DNI</td>
                                            <td>Nombre</td>
                                            <td>Correo</td>
                                            <td>Teléfono</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <?php
                                                while($datos = mysqli_fetch_assoc($resultado)){
                                            ?>
                                            <td><?php echo $datos['DNI'] ?></td>
                                            <td><?php echo $datos['Nombre'] ?></td>
                                            <td><?php echo $datos['Correo'] ?></td>
                                            <td><?php echo $datos['Telefono'] ?></td>
                                            <td><a href="modificar.php?U_IdEmpleado=<?php echo $datos['IdEmpleado']?>" class="btn btn-success">Editar</a></td>
                                            <td><a href="borrar.php?D_IdEmpleado<?php echo $datos['IdEmpleado']?>" class="btn btn-danger">Borrar</a></td>
                                        </tr>
                                            <?php
                                                }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>  
        <footer class="text-center">&copy; Jose Angel Betancourt</footer>
    </body>
</html>

