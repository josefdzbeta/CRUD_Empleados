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
    <header>
        <nav>

        </nav>
    </header>
    <aside>

    </aside>
    <main>

    </main>
    <body class="bg-dark">
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
                                    <td colspan="2">Operación</td>
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
        <footer> &copy; Jose Angel Betancourt</footer>
    </body>
</html>

