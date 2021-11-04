<?php
    require_once('./config/dbconfig.php');
    $db = new operaciones();
    $db->actualizar();
    $IdEmpleado = $_GET['IdEmpleado'];
    $resultado = $db->editarDatos($IdEmpleado);
    $datos = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Operaciones CRUD Orientado a Objetos</title>
    </head>
    <body>
        <header class="text-center">
           <h1>HEADER</h1>
        </header>
        <aside>
            <nav>
                <ul>
                    <li><a href="index.php">Añadir</a></li>
                    <li><a href="mostrar.php">Mostrar Empleados</a></li>
                    <li><a href="modificar.php">Buscar</a></li>
                </ul>
            </nav>
        </aside>  
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h2>Actualizar Datos</h2>
                            </div>
                                <?php $db->guardarDatos(); ?>
                                <div class="card-body">
                                    <form method="POST">
                                        <input type="hidden" name="IdEmpleado" value="<?php $datos['IdEmpleado']; ?>" >
                                        <input type="text" name="dni" placeholder="DNI" value="<?php echo $datos['DNI']; ?>" pattern="[0-9]{8}[A-Za-z]{1}" class="form-control mb-2" required>
                                        <input type="text" name="nombre" value="<?php echo $datos['Nombre']; ?>" placeholder="Nombre" class="form-control mb-2" required >
                                        <input type="email" name="email" value="<?php echo $datos['Correo']; ?>"" placeholder="Correo" class="form-control mb-2" required ">
                                        <input type="tel" name="telefono" value="<?php echo $datos['Telefono']; ?>" placeholder="Telefono"  pattern="[0-9]{9}" class="form-control mb-2" required>
    
                                        <div class="card-footer">
                                            <button class="btn btn-success" name="Editar">Editar</button>   
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="text-center"> &copy; Jose Angel Betancourt</footer>
    </body>
</html>

